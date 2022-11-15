<?php

namespace App\Http\Controllers\Pages;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryPageController extends Controller
{
    //
    public function show(){
        $categories = Category::all();
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
