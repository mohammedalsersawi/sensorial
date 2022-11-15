<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorPageController extends Controller
{
    //
    public function show($id)
    {
        $instructor = Instructor::find($id);
        $courses = Course::where('instructor_id', '=', $id)->get();
        return view('sensorial.pages.instructor.Profile', compact('instructor','courses'));
    }
}
