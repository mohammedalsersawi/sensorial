<?php

namespace App\Http\Controllers\Pages;

use App\Models\CourseUser;
use App\Models\User;
use App\Models\Course;
use App\Http\Controllers\Controller;

class CustomerPageController extends Controller
{
    //
    public function show($id)
    {
        $customer = User::findOrFail($id);
        $auth = auth()->user()->id;
        $courses = CourseUser::where('user_id','=', $auth)->where('status',1)->get();

        $coursesShow =  Course::whereNotIn('id',$courses->pluck('course_id')->toArray())->orderBy('created_at', 'DESC')->get();

        return view('sensorial.pages.customer.customer', compact('customer', 'courses', 'coursesShow'));
    }
}
