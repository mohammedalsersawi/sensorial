<?php

namespace App\Http\Controllers\Pages;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseUser;
use App\Models\Like;
use App\Models\rateing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CoursePageController extends Controller
{
    //
    public function show( $id)
    {
       $show=CourseUser::where('user_id',Auth::id())->where('course_id',$id)->exists();
        $course = Course::find($id);
        $rate=rateing::where('user_id',Auth::id())->where('course_id',$id)->exists();
        $courses = Course::where('id', '<>', $id)->get()->take(4);

        if(auth()->user()){
            $user = Auth::id();

            $cart = Cart::where('user_id', '=', $user)->get();

            $count = Cart::where('user_id', $user)->count();


            return view('sensorial.pages.course.course', compact('course','courses','cart','count','rate','show'));
        } else {
            return view('sensorial.pages.course.course', compact('course','courses','rate','show'));
        }
    }

    public function all(Request $request)

    {
        $category=Category::select(['category_name','id'])->get();
        if($request->has('sarech')){

            $like=Like::where('user_id',Auth::id())->pluck('course_id')->toArray();
            $courses = Course::where('rate','=',$request->sarech)->get();
            if(auth()->user()){
                $user = auth()->user()->id;
                $cart = Cart::where('user_id', '=', $user)->get();
                $count = Cart::where('user_id', $user)->count();
                return view('sensorial.pages.course.courses', compact('courses','cart','count','like','category'));
            } else {
                return view('sensorial.pages.course.courses', compact('courses','like','category'));
            }
        }
        if($request->has('filter')) {
            $like = Like::where('user_id', Auth::id())->pluck('course_id')->toArray();

                $idd = Course::whereIn('category_id', $request->filter)->pluck('id');
            $courses=Course::whereIn('id', $idd)->get();

            if(auth()->user()){
                $user = auth()->user()->id;
                $cart = Cart::where('user_id', $user)->get();
                $count = Cart::where('user_id', $user)->count();
                return view('sensorial.pages.course.courses', compact('courses','cart','count','like','category'));
            } else {
                return view('sensorial.pages.course.courses', compact('courses','like','category'));
            }
        }

        $like=Like::where('user_id',Auth::id())->pluck('course_id')->toArray();
        $courses = Course::all();
        if(auth()->user()){
            $user = auth()->user()->id;
            $cart = Cart::where('user_id', '=', $user)->get();
            $count = Cart::where('user_id', $user)->count();
            return view('sensorial.pages.course.courses', compact('courses','cart','count','like','category'));
        } else {
            return view('sensorial.pages.course.courses', compact('courses','like','category'));
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

    public function rateing(Request $request,$course_id){

        $user=CourseUser::where('user_id',Auth::id())->where('course_id',$course_id)->exists();
        if($user){

           rateing::create([
                'user_id'=>Auth::id(),
                'course_id'=>$course_id,
                'ratein'=>$request->rating
            ]);
           $r=rateing::where('course_id',$course_id)->avg('ratein');

            Course::where('id',$course_id)->update([
               'rate'=>$r
           ]);


            return  redirect()->back();
        }else{
            return  redirect()->back()->withErrors('You cant rate');
        }
    }
}
