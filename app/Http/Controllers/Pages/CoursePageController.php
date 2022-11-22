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
        $category=Category::select(['category_name','id'])->get();

        $show=CourseUser::where('user_id',Auth::id())->where('course_id',$id)->exists();
        $course = Course::find($id);
        $rate=rateing::where('user_id',Auth::id())->where('course_id',$id)->exists();
        $courses = Course::where('id', '<>', $id)->get()->take(4);

        if(auth()->user()){
            $user = Auth::id();

            $cart = Cart::where('user_id', '=', $user)->get();

            $count = Cart::where('user_id', $user)->count();


            return view('sensorial.pages.course.course', compact('course','courses','cart','count','rate','show','category'));
        } else {
            return view('sensorial.pages.course.course', compact('course','courses','rate','show','category'));
        }
    }

    public function all(Request $request)

    {
        $like = Like::where('user_id', Auth::id())->pluck('course_id')->toArray();

        $category=Category::select(['category_name','id'])->get();
        if($request->has('sarech')){
            $idd = Course::whereIn('rate', $request->sarech)->pluck('rate');
            $courses=Course::whereIn('rate', $idd)->get();
//            $courses = Course::where('rate','=',$request->sarech)->get();

        }
        elseif($request->has('filter')) {

                $idd = Course::whereIn('category_id', $request->filter)->pluck('id');
            $courses=Course::whereIn('id', $idd)->get();

        }
        elseif($request->has('ser')) {

            $courses=Course::where('course_name', 'like','%'.$request->ser.'%')->get();


        }
        else{
            $courses = Course::all();
        }

        $like=Like::where('user_id',Auth::id())->pluck('course_id')->toArray();

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
        $category=Category::select(['category_name','id'])->get();


        return view('sensorial.pages.course.courses', compact('courses','courses','like','category'));
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
