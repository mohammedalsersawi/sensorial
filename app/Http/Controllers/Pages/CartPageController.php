<?php

namespace App\Http\Controllers\Pages;

use App\Events\sendmail;
use App\Jobs\sendmailjop;
use App\Listeners\check;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Course;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\CourseUser;
use App\Models\Installment;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CartPageController extends Controller
{
    //
    public function addToCart(Request $request)
    {
        $course_id = $request->get('course_id');
        $course_check = Cart::where('course_id', '=', $course_id)->where('user_id', '=', auth()->user()->id)->first();
        if (auth()->user()) {
            if ($course_check) {
                return redirect()->back()->with('fail', $course_check->course->course_name . ' Course' . ' Already Added to Cart ..!');
            } else {

                $cart = new Cart();
                $cart->user_id = auth()->user()->id;
                $cart->course_id = $request->course_id;
                $cart->instructor_id = $request->instructor_id;
                $cart->price = $request->price;
                $cart->save();

                return redirect()->back()->with('success', 'Course Added to Cart Success');
            }
        } else {
            return redirect(route('login'));
        }
    }

    static function cartItem()
    {
        $user = auth()->user()->id;
        return Cart::where('user_id', $user)->count();
    }

    static function cartList()
    {
        if (auth()->user()) {
            $user = auth()->user()->id;
            $cart = Cart::where('user_id', '=', $user)->whereNull('order_id')->get();
            $count = Cart::where('user_id', $user)->count();
            $amount = 0;
            foreach ($cart as $car) :
                $amount +=  $car->price;
            endforeach;
            $totel = $amount;
            return view('sensorial.pages.cart.cart', compact('cart', 'count', 'totel'));
        } else {
            return view('sensorial.pages.cart.cart');
        }
    }

    public function removeCartItem($id)
    {
        $isDeleted = Cart::destroy($id);
        if ($isDeleted) {
            return redirect(route('viewCart'))->with('success', 'Deleted Successfully !');
        } else {
            return redirect(route('viewCart'))->with('fail', 'Deleted Failed, Something wrong!');
        }
    }
    public function checkout()
    {

        $carts = Cart::where('user_id', Auth::id())->whereNull('order_id')->get();
        $count = Cart::where('user_id', Auth::id())->whereNull('order_id')->count();
        if($count > 0){
            $amount = 0;
            foreach ($carts as $cart) :
                $amount +=  round($cart->price, 2);
            endforeach;
            $totel = $amount;

            $url = "https://eu-test.oppwa.com/v1/checkouts";
            $data = "entityId=8a8294174b7ecb28014b9699220015ca" .
                "&amount=$amount" .
                "&currency=USD" .
                "&paymentType=DB";

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='
            ));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // this should be set to true in production
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $responseData = curl_exec($ch);
            if (curl_errno($ch)) {
                return curl_error($ch);
            }
            curl_close($ch);
            $responseData = json_decode($responseData, true);
            $checkoutId = $responseData['id'];
            return view('sensorial.pages.cart.checkout', compact('checkoutId', 'totel'));
        } else {
            toastr()->warning('السلة فارغة ');
            return redirect()->back();
        }
    }



    public function thanks()
    {
        $carts = Cart::where('user_id', Auth::id())->whereNull('order_id')->get();
        // return $carts;
        $amount = 0;
        foreach ($carts as $cart) :
            $amount +=  round($cart->price, 2);
        endforeach;
        $resourcePath = request()->resourcePath;

        $url = "https://eu-test.oppwa.com/$resourcePath";
        $url .= "?entityId=8a8294174b7ecb28014b9699220015ca";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='
        ));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $responseData = json_decode($responseData, true);
        // dd($responseData['result']['code']);

        if ($responseData['result']['code'] == '000.100.110') {
            $order = Order::create(['total' => $amount, 'user_id' => Auth::id()]);
            foreach ($carts as $cart) {
            CourseUser::create(['course_id' => $cart->course_id, 'user_id' => Auth::id(), 'status' => 1]);
            };
            Cart::where('user_id', Auth::id())->whereNull('order_id')->update(['order_id' => $order->id]);
            Payment::create([
                'total' => $amount,
                'user_id' => Auth::id(),
                'tranaction_id' => $responseData['id'],
                'order_id' => $order->id
            ]);
            toastr()->success('نجحت عملية الشراء');
            return redirect()->route('homeShow');
        } else {
            toastr()->error('فشلت عملية الشراء');
            return redirect()->back();
        }
    }

    public function checkout_installments(Request $request)
    {
        $cart = Cart::where('user_id', '=', Auth::id())->whereNull('order_id')->first();
        $count = Cart::where('user_id', '=', Auth::id())->whereNull('order_id')->count();
        if($count > 0){
        $user = auth()->user()->id;
        $time_installment = $request->installment;
        $amount = 0;
        $totel = 0;
        if ($cart) {
            $count = Cart::where('user_id', $user)->count();
            $totel = $cart->price;
            $amount = round($totel / $time_installment, 2);
        }
        ////////////////////////////////////////////////
        $url = "https://eu-test.oppwa.com/v1/checkouts";
        $data = "entityId=8a8294174b7ecb28014b9699220015ca" .
            "&amount=$amount" .
            "&currency=USD" .
            "&paymentType=DB";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='
        ));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $responseData = json_decode($responseData, true);
        $checkoutId = $responseData['id'];
        return view('sensorial.pages.cart.installments', compact('checkoutId', 'amount', 'totel', 'time_installment'));
    } else {
        toastr()->warning('السلة فارغة ');
        return redirect()->back();
    }
    }

    public function thanksInstallment(Request $request, $count)
    {
        $user = auth()->user()->id;
        $data = Cart::where('user_id', '=', $user)->whereNull('order_id')->latest()->first();
        $price = $data->price / $count;
        $amount = round($price, 2);
        $resourcePath = request()->resourcePath;
        $url = "https://eu-test.oppwa.com/$resourcePath";
        $url .= "?entityId=8a8294174b7ecb28014b9699220015ca";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='
        ));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $responseData = json_decode($responseData, true);
        if ($responseData['result']['code'] == '000.100.110') {
            $order = Order::create(['total' => $amount, 'user_id' => Auth::id()]);
            Cart::where('user_id', Auth::id())->whereNull('order_id')->update(['order_id' => $order->id]);
            CourseUser::create(['course_id' => $data->course_id, 'user_id' => Auth::id(), 'status' => 1]);
            Payment::create([
                'total' => $amount,
                'user_id' => Auth::id(),
                'tranaction_id' => $responseData['id'],
                'order_id' => $order->id
            ]);

            Installment::create([
                'Paid' => $amount,
                'user_id' => Auth::id(),
                'course_id' => $data->course_id,
                'count_installment' => $count,
                'due_installments' => $count - 1,
            ]);

            toastr()->success('نجحت عملية الشراء');
            return redirect()->route('homeShow');
        } else {

            $data = Installment::where('user_id', $user)->latest()->first();
            $data->delete;
            toastr()->error('فشلت عملية الشراء');
            return redirect()->back();
        }
    }

    public function checkout_premium()
    {
        $Installments = Installment::where('user_id', Auth::id())->latest()->first();
        if ($Installments->due_installments > 0) {
            $amount = round($Installments->Paid, 2);
            $totel = $amount * $Installments->due_installments;
            $url = "https://eu-test.oppwa.com/v1/checkouts";
            $data = "entityId=8a8294174b7ecb28014b9699220015ca" .
                "&amount=$amount" .
                "&currency=USD" .
                "&paymentType=DB";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='
            ));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // this should be set to true in production
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $responseData = curl_exec($ch);
            if (curl_errno($ch)) {
                return curl_error($ch);
            }
            curl_close($ch);
            $responseData = json_decode($responseData, true);
            $checkoutId = $responseData['id'];
            return view('sensorial.pages.cart.premium', compact('checkoutId', 'Installments', 'totel'));
        } else {
            toastr()->warning('لا يوجد اقساط');
            return redirect()->back();
        }
    }

    public function thanks_premium()
    {
        $Installments = Installment::where('user_id', Auth::id())->latest()->first();
        $amount = round($Installments->Paid, 2);
        $resourcePath = request()->resourcePath;
        $url = "https://eu-test.oppwa.com/$resourcePath";
        $url .= "?entityId=8a8294174b7ecb28014b9699220015ca";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='
        ));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $responseData = json_decode($responseData, true);
        // dd($responseData['result']['code']);

        if ($responseData['result']['code'] == '000.100.110') {
            $order = Order::create(['total' => $amount, 'user_id' => Auth::id()]);
            Cart::where('user_id', Auth::id())->whereNull('order_id')->update(['order_id' => $order->id]);
            $data = Installment::create([
                'Paid' => $amount,
                'user_id' => Auth::id(),
                'course_id' => $Installments->course_id,
                'count_installment' => $Installments->count_installment,
                'due_installments' => $Installments->due_installments - 1,
            ]);
            Payment::create([
                'total' => $amount,
                'user_id' => Auth::id(),
                'tranaction_id' => $responseData['id'],
                'order_id' => $order->id
            ]);
            //event(new sendmail($data));
            $job = new sendmailjop($data);
            $job->delay(now()->addSecond(20));
            $this->dispatch($job);
            toastr()->success('نجحت عملية الشراء');
            return redirect()->route('homeShow');
        } else {
            toastr()->error('فشلت عملية الشراء');
            return redirect()->back();
        }
    }
}
