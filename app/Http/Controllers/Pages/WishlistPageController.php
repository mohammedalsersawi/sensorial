<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishlistPageController extends Controller
{
    //
    public function view()
    {
        return view('sensorial.pages.wishlist.wishlist');
    }
}
