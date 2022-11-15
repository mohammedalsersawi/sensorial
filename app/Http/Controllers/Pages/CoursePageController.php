<?php

namespace App\Http\Controllers\Pages;

use App\Models\Cart;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursePageController extends Controller
{
    //
    public function show($id)
    {
        $course = Course::find($id);
        $courses = Course::where('id', '<>', $id)->get()->take(4);
        if(auth()->user()){
            $user = auth()->user()->id;
            $cart = Cart::where('user_id', '=', $user)->get();
            $count = Cart::where('user_id', $user)->count();
            return view('sensorial.pages.course.course', compact('course','courses','cart','count'));
        } else {
            return view('sensorial.pages.course.course', compact('course','courses'));
        }
    }

    public function all()
    {
        $courses = Course::all();
        if(auth()->user()){
            $user = auth()->user()->id;
            $cart = Cart::where('user_id', '=', $user)->get();
            $count = Cart::where('user_id', $user)->count();
            return view('sensorial.pages.course.courses', compact('courses','cart','count'));
        } else {
            return view('sensorial.pages.course.courses', compact('courses'));
        }
    }
}
