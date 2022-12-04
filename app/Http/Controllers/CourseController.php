<?php

namespace App\Http\Controllers;

use App\Models\CourseUser;
use App\Models\Quiz;
use App\Models\User;
use App\Models\Learn;
use App\Models\Course;
use App\Models\Lecture;
use App\Models\Section;
use App\Models\Student;
use App\Models\Category;
use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Models\CoursesLearns;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //

        if (Auth::guard('admin')->check()) {
            $courses = Course::all();
            $categories = Category::all();
            $instructors = Instructor::all();
            return view('sensorial.dashboard.courses.index',compact('categories','courses','instructors'));


        } else {
            $courses = Course::where('instructor_id',Auth::guard('instructor')->user()->id)->get();
            $categories = Category::all();
            $instructors = Instructor::where('id',Auth::guard('instructor')->user()->id)->get();
            return view('sensorial.dashboard.instructors.courses.index',compact('categories','courses','instructors'));


        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator($request->all()->get(),[
            'course_name' => 'required|string',
            'course_detail' => 'required|string',
            'course_photo' => 'required',
        ]);

        if(!$validator->fails())
        {
            $course = new Course();
            $course->course_name = $request->course_name;
            if ($request->hasFile('course_photo')){
                $image = time() .'.'.$request -> course_photo->extension();
                $request->course_photo->move(public_path('requirement/uploads/course_photo/'),$image);
                $course->course_photo = $image;
            }
            $course->course_detail = $request->course_detail;
            $course->category_id = $request->category_id;
            $course->instructor_id = $request->instructor_id;
            $course->note = $request->note;
            $course->description = $request->description;
            $isSaved = $course->save();

            return response()->json([
                'message' => $isSaved ? "Created Successfully" : "Failed to Create"
            ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);

            } else {
            //VALIDATION FAILED في حال فشل الفاليديشن
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if (Auth::guard('admin')->check()) {
            $course = Course::findOrFail($id);
            $students = CourseUser::where('course_id', '=', $id)->get();
            $course_inst = $course->instructor->id;
            $instructors = Instructor::where('id', '<>', $course_inst)->get();
            $categories = Category::all();
            $users = User::all();
            $lectures = Lecture::where('course_id', '=', $id)->get();
            $quizzes = Quiz::where('course_id', '=', $id)->get();
            $learns = Learn::where('course_id', '=', $id)->get();
            return view('sensorial.dashboard.courses.view-course', compact('course','quizzes','lectures','learns','students', 'users','instructors','categories'));

        } else {
            $course = Course::findOrFail($id);
            $students = CourseUser::where('course_id', '=', $id)->get();
            $instructors = Instructor::where('id', '<>', Auth::guard('instructor')->user()->id)->get();
            $categories = Category::all();
            $users = User::all();
            $lectures = Lecture::where('course_id', '=', $id)->get();
            $quizzes = Quiz::where('course_id', '=', $id)->get();
            $learns = Learn::where('course_id', '=', $id)->get();
            return view('sensorial.dashboard.instructors.courses.view-course', compact('course','quizzes','lectures','learns','students', 'users','instructors','categories'));

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $course = Course::findOrFail($id);
        $instructors = Instructor::where('id',Auth::guard('instructor')->user()->id)->get();
        $categories = Category::all();
        return response()->view('sensorial.dashboard.courses.edit',compact('categories','course','instructors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $request->validate([
        ]);

            $course = Course::find($id);
            $course->course_name = $request->curs_name;
            if ($request->hasFile('course_photo')){
                $image = time() .'.'.$request -> course_photo->extension();
                $request->course_photo->move(public_path('requirement/uploads/course_photo/'),$image);
                $course->course_photo = $image;
            }
            $course->course_detail = $request->course_detail;
            $course->category_id = $request->categ_id;
            $course->instructor_id = $request->inst_id;
            $course->note = $request->note;
            $course->description = $request->course_description;
            $isSaved = $course->save();

            if($isSaved){
                return redirect()->back();
            } else {
                return redirect()->back();
            }

            }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
        $isDeleted = $course->delete();
        if($isDeleted){
            return response()->json(['icon' => 'success' ,'title' => 'Success!' ,'text' => 'Deleted Successfuly' ,],Response::HTTP_OK);
        } else {
            return response()->json(['icon' => 'error' ,'title' => 'Failed!' ,'text' => 'Deleted Failed ' ,],Response::HTTP_BAD_REQUEST);
        }
    }
}
