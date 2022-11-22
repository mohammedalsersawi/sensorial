<?php

namespace App\Http\Controllers\Pages;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Course;
use App\Models\Like;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryPageController extends Controller
{
    //
    public function show(){
        if(request()->has('modelsearch')){
            $categories = Category::where('category_name','like', '%'.request()->modelsearch.'%')->latest()->paginate(20);
            if(auth()->user()){
                $user = auth()->user()->id;
                $cart = Cart::where('user_id', '=', $user)->get();
                $count = Cart::where('user_id', $user)->count();
                return view('sensorial.pages.categories.categories', compact('categories','cart','count'));
            } else {

                return view('sensorial.pages.categories.categories', compact('categories'));
            }
        }else{
            $categories = Category::latest()->paginate(20);;
            if(auth()->user()){
                $user = auth()->user()->id;
                $cart = Cart::where('user_id', '=', $user)->get();
                $count = Cart::where('user_id', $user)->count();
                return view('sensorial.pages.categories.categories', compact('categories','cart','count'));
            } else {

        return view('sensorial.pages.categories.categories', compact('categories'));
}
        }

    }
    public function ShowCourseCategory($id){
        $like=Like::where('user_id',Auth::id())->pluck('course_id')->toArray();
        $category=Category::select(['category_name','id'])->get();

        $courses= Category::findOrFail($id)->courses;
            return view('sensorial.pages.course.courses', compact('courses','like','category'));

    }

}
