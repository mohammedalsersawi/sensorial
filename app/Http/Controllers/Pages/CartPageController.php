<?php

namespace App\Http\Controllers\Pages;

use App\Models\Cart;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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
            $cart = Cart::where('user_id', '=', $user)->get();
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
}
