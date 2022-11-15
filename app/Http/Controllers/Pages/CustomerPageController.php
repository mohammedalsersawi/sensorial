<?php

namespace App\Http\Controllers\Pages;

use App\Models\User;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerPageController extends Controller
{
    //
    public function show($id)
    {
        $customer = User::find($id);
        $auth = auth()->user()->id;
        $courses = Student::where('user_id','=', $auth)->where('status', '=', 1)->get();
        $coursesShow =  Course::orderBy('created_at', 'DESC')->get();
        return view('sensorial.pages.customer.customer', compact('customer', 'courses', 'coursesShow'));
    }
}
