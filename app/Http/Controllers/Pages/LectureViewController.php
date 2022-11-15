<?php

namespace App\Http\Controllers\Pages;

use App\Models\Lecture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LectureViewController extends Controller
{
    //
    public function show($id)
    {
        $lecture = Lecture::find($id);
        return view('sensorial.pages.lecture.view');
    }
}
