<?php

namespace App\Http\Controllers\Pages;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Course;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CartPageController extends Controller
{
    //
    public function addToCart(Request $request)
    {
        $course_id = $request->get('course_id');
        $course_check = Cart::where('course_id', '=', $course_id)->where('user_id', '=', auth()->user()->id)->first();
        if(auth()->user())
        {
            if($course_check)
            {
                return redirect()->back()->with('fail', $course_check->course->course_name. ' Course'. ' Already Added to Cart ..!');
            } else {

            $cart = new Cart();
            $cart->user_id = auth()->user()->id;
            $cart->course_id = $request->course_id;
            $cart->instructor_id = $request->instructor_id;
            $cart->price = $request->price;
            $cart->save();

                return redirect()->back()->with('success','Course Added to Cart Success');
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
        if(auth()->user()){
            $user = auth()->user()->id;
            $cart = Cart::where('user_id', '=', $user)->whereNull('order_id')->get();
            $count = Cart::where('user_id', $user)->count();
            return view('sensorial.pages.cart.cart', compact('cart','count'));
        } else {
            return view('sensorial.pages.cart.cart');
        }
    }

    public function removeCartItem($id)
    {
        $isDeleted = Cart::destroy($id);
        if($isDeleted)
        {
            return redirect(route('viewCart'))->with('success', 'Deleted Successfully !');
        } else {
            return redirect(route('viewCart'))->with('fail', 'Deleted Failed, Something wrong!');
        }
    }
    public function checkout()
    {
        $carts = Cart::where('user_id', Auth::id())->whereNull('order_id')->get();
        // return $carts;
        $amount = 0;
        foreach ($carts as $cart):
            $amount +=  $cart->price;
        endforeach;
        $url = "https://eu-test.oppwa.com/v1/checkouts";
        $data = "entityId=8a8294174b7ecb28014b9699220015ca" .
                    "&amount=$amount" .
                    "&currency=USD" .
                    "&paymentType=DB";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                        'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $responseData = json_decode($responseData, true);
            // return $responseData;
        $checkoutId = $responseData['id'];

        // dd($responseData);
        return view('sensorial.pages.cart.checkout', compact('checkoutId'));

    }

    public function thanks()
    {
        $carts = Cart::where('user_id', Auth::id())->whereNull('order_id')->get();
        // return $carts;
        $amount = 0;
        foreach ($carts as $cart):
            $amount +=  $cart->price;
        endforeach;

        // dd(request()->all());
        $resourcePath = request()->resourcePath;

        $url = "https://eu-test.oppwa.com/$resourcePath";
        $url .= "?entityId=8a8294174b7ecb28014b9699220015ca";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $responseData = json_decode($responseData, true);
        // dd($responseData['result']['code']);

        if($responseData['result']['code'] == '000.100.110') {
            $order = Order::create(['total' => $amount, 'user_id' => Auth::id()]);

            // Payment::create([
            //     'total' => 200,
            //     'user_id' => Auth::id(),
            //     'tranaction_id' => $responseData['id'],
            //     'order_id' => $order->id
            // ]);

            Cart::where('user_id', Auth::id())->whereNull('order_id')->update(['order_id' => $order->id]);



            return "نجحت العملية";
        }else {
            return "فشلت العملية";
        }
    }

}
