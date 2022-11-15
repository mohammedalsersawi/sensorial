<?php

namespace App\Http\Controllers\Pages;

use App\Models\Cart;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    //
    public function show()
    {
        $courses = Course::all();
        $categories = Category::all();

        if(auth()->user()){
            $user = auth()->user()->id;
            $cart = Cart::where('user_id', '=', $user)->get();
            $count = Cart::where('user_id', $user)->count();
            return view('sensorial.pages.home.home', compact('courses','categories','cart','count'));
        } else {
            return view('sensorial.pages.home.home', compact('courses', 'categories'));
        }
    }

        // $cartCourses = DB::table('cart')
        // ->join('courses', 'cart.course_id', '=', 'courses.id')
        // ->where('cart.user_id', $user)
        // ->select('courses.*')
        // ->get();





}
