<?php

namespace App\Http\Controllers\Pages;

use App\Models\biography;
use App\Models\Cart;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    //
    public function show()
    {
        $courses = Course::latest('rate')->limit(10)->get();
        $categories = Category::latest('power')->limit(3)->get();
        $biography=biography::findOrFail(4);
        $biographyGroup=biography::limit(3)->get();
        $CountCourses = DB::table('courses')->count();
        $CountUsers = DB::table('users')->count();
        $CountCategories = DB::table('categories')->count();
      //  $users = DB::table('users')->count();
        $arr=[$CountCourses,$CountUsers,$CountCategories];


        if(auth()->user()){
            $user = auth()->user()->id;
            $cart = Cart::where('user_id', '=', $user)->get();
            $count = Cart::where('user_id', $user)->count();
            return view('sensorial.pages.home.home', compact('courses','categories','cart','count','biography','biographyGroup','arr'));
        } else {
            return view('sensorial.pages.home.home', compact('courses', 'categories','biography','biographyGroup','arr'));
        }
    }

        // $cartCourses = DB::table('cart')
        // ->join('courses', 'cart.course_id', '=', 'courses.id')
        // ->where('cart.user_id', $user)
        // ->select('courses.*')
        // ->get();

    public function CategoriesShow(){
        $biography=biography::findOrFail(4);
        $biographyGroup=biography::limit(3)->get();
        $categories = Category::all();
        return view('sensorial.pages.home.categories', compact('categories','biography','biographyGroup'));


    }




}
