<?php

namespace App\Http\Controllers\Pages;

use App\Models\Course;
use App\Models\Lecture;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class ViewCourseController extends Controller
{
    //
    static function show($id)
    {
        $course = Course::find($id);
        return view('sensorial.pages.view.section', ['course' => $course]);
    }

    public function showLecture($id)
    {
        $id = $id;
        $course = Course::find($id);
        $lecture = Lecture::find($id);
        return view('sensorial.pages.view.lecture', compact('course', 'lecture' , 'id'));
    }

    public function reviews($id)
    {
        $id = $id;
        $user = auth()->user();
        $course = Course::find($id);
        $lecture = Lecture::find($id);
        $comments = Comment::where(['lecture_id' => $id , 'course_id' => $lecture->course_id ])->get();
        return view('sensorial.pages.view.reviews' , compact('course', 'lecture' ,'user', 'id', 'comments'));
    }
    public function add_comment()
    {
        Comment::create([
            'comment' => request()->comment,
            'course_id' => request()->course_id,
            'lecture_id' => request()->lecture_id,
            'user_id' => Auth::id(),
        ]);
        $comments = Comment::where(['lecture_id' => 4 , 'course_id' => 3 ])->get();
        return view('sensorial.pages.view.list' , compact('comments'))->render();
    }
}
