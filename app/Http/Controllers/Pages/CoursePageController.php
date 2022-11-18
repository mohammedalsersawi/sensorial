<?php

namespace App\Http\Controllers\Pages;

use App\Models\Cart;
use App\Models\Course;
use App\Models\Like;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CoursePageController extends Controller
{
    //
    public function show($id)
    {


        $course = Course::find($id);

        $courses = Course::where('id', '<>', $id)->get()->take(4);

        if(auth()->user()){
            $user = Auth::id();

            $cart = Cart::where('user_id', '=', $user)->get();

            $count = Cart::where('user_id', $user)->count();


            return view('sensorial.pages.course.course', compact('course','courses','cart','count'));
        } else {
            return view('sensorial.pages.course.course', compact('course','courses'));
        }
    }

    public function all()
    {
        $like=Like::where('user_id',Auth::id())->pluck('course_id')->toArray();
        $courses = Course::all();
        if(auth()->user()){
            $user = auth()->user()->id;
            $cart = Cart::where('user_id', '=', $user)->get();
            $count = Cart::where('user_id', $user)->count();
            return view('sensorial.pages.course.courses', compact('courses','cart','count','like'));
        } else {
            return view('sensorial.pages.course.courses', compact('courses','like'));
        }
    }
    public function postlike(Request $request){
        $course=Like::where('user_id',Auth::id())->where('course_id',$request->course)->exists();
        if(!$course) {
            Like::create([
                'user_id' => Auth::id(),
                'course_id' => $request->course
            ]);
        }else{
            $course=Like::where('user_id',Auth::id())->where('course_id',$request->course)->delete();

        }

    }
    public function showlike(){

        $like=Like::where('user_id',Auth::id())->pluck('course_id')->toArray();
        $courses=Course::whereIn('id',$like)->latest()->get();

        return view('sensorial.pages.course.courses', compact('courses','courses','like'));
    }
}
