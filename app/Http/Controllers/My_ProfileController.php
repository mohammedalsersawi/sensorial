<?php

namespace App\Http\Controllers;
use App\Models\My_Profile;

use Illuminate\Http\Request;

class My_ProfileController extends Controller
{

    public function index()
    {
        //
        return view('sensorial.pages.My_Profile.index');
    }




    public function review()
    {
        //
        return view('sensorial.pages.My_Profile.review');
    }

    public function payment()
    {
        //
        return view('sensorial.pages.My_Profile.payment');
    }

    public function details()
    {
        //
        return view('sensorial.pages.My_Profile.details');
    }

    public function check_out()
    {
        //
        return view('sensorial.pages.My_Profile.check_out');
    }


    public function methods()
    {
        //
        return view('sensorial.pages.My_Profile.methods');
    }

    public function forgot_password()
    {
        //
        return view('sensorial.pages.My_Profile.forgot_password');
    }


    public function create_password()
    {
        //
        return view('sensorial.pages.My_Profile.create_password');
    }

    public function bank()
    {
        //
        return view('sensorial.pages.My_Profile.bank');
    }


    public function confirmation()
    {
        //
        return view('sensorial.pages.My_Profile.confirmation');
    }


    public function Course_fee()
    {
        //
        return view('sensorial.pages.My_Profile.Course_fee');
    }

    public function video()
    {
        //
        return view('sensorial.pages.My_Profile.video');
    }

    public function video_review()
    {
        //
        return view('sensorial.pages.My_Profile.video_review');
    }

    public function assignment()
    {
        //
        return view('sensorial.pages.My_Profile.assignment');
    }

    public function challenge()
    {
        //
        return view('sensorial.pages.My_Profile.challenge');
    }

    public function certification()
    {
        //
        return view('sensorial.pages.My_Profile.certification');
    }

    public function about_course()
    {
        //
        return view('sensorial.pages.My_Profile.about_course');
    }

    public function grade()
    {
        //
        return view('sensorial.pages.My_Profile.grade');
    }
}
