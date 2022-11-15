<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::all();
        $users = User::all();
        $courses = Course::all();
        return view('sensorial.dashboard.students.index', compact('students','users','courses'));
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
        $user = $request->get('user_id');
        $course = $request->get('course_id');

        $student_check = Student::where('user_id', '=', $user)->where('course_id', '=', $course)->first();

        if(!$student_check){
            $student = new Student();
            $validator = Validator($request->all(),[
                'user_id' => 'required',
                'course_id' => 'required'
            ]);

            if(!$validator->fails())
            {
                $student->user_id = $request->get('user_id');
                $student->course_id = $request->get('course_id');
                $isSaved = $student->save();
                return response()->json([
                    'message' => $isSaved ? "Student Added Successfully" : "Failed to Create"
                ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);

                } else {
                //VALIDATION FAILED في حال فشل الفاليديشن
                return response()->json([
                    'message' => $validator->getMessageBag()->first()
                ], Response::HTTP_BAD_REQUEST);
            }
        } else {
            return response()->json([
                'code'      =>  400,
                'message'   =>  $student_check ? 'Student '. $student_check->user->name_en .' is Already Registered in '. $student_check->course->course_name .' Course' : 'Failed'
            ], $student_check ? Response::HTTP_BAD_REQUEST : Response::HTTP_BAD_REQUEST);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $student = Student::where('user_id', '=', $id)->first();
        $courses = DB::table('courses')
        ->select('*')
        ->join('course_user', 'courses.id', '=', 'course_user.course_id')
        ->where('course_user.user_id', '=', $id)
        ->get();
        return response()->view('sensorial.dashboard.students.profile', compact('student','courses'));
        // return $student;
        // return $courses;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $student = Student::find($id);
        $isDeleted = $student->delete();
        if($isDeleted){
            return response()->json(['icon' => 'success' ,'title' => 'Success!' ,'text' => 'Deleted Successfuly' ,],Response::HTTP_OK);
        } else {
            return response()->json(['icon' => 'error' ,'title' => 'Failed!' ,'text' => 'Deleted Failed ' ,],Response::HTTP_BAD_REQUEST);
        }
    }
}