<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Instructor::all();
        return response()->view('sensorial.dashboard.instructors.index',['instructors' => $data]);
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
        $instructor = new Instructor();
        $validator = Validator($request->all(),[
            'name_en' => 'required|string|unique:instructors,name',
            'email' => 'required|email|unique:instructors,email',
            'password' => 'required',
            'phone_number' => 'required|string|unique:instructors,phone_number',
            'address' => 'required|string',
            'photo' => 'required',
        ]);

        if(!$validator->fails())
        {
            $instructor->name = $request->get('name_en');
            $instructor->email = $request->get('email');
            $instructor->age = $request->get('age');
            $instructor->phone_number = $request->get('phone_number');
            $instructor->password = Hash::make($request->get('password'));
            $instructor->gender = $request->get('gender');
            $instructor->code = $request->get('code');
            $instructor->address = $request->get('address');
            if ($request->hasFile('id_photo')){
                $image = time() .'.'.$request -> id_photo->extension();
                $request->id_photo->move(public_path('requirement/uploads/instructors/'),$image);
                $instructor->id_photo = $image;
            }
            if ($request->hasFile('photo')){
                $image = time() .'.'.$request -> photo->extension();
                $request->photo->move(public_path('requirement/uploads/instructors/'),$image);
                $instructor->photo = $image;
            }
            $instructor->university = $request->get('unev');
            $instructor->details = $request->get('detail');

            $isSaved = $instructor->save();


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
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $instructor = Instructor::find($id);
        $courses = Course::where('instructor_id', '=', $id)->get();

        $students = Student::all();
        return view('sensorial.dashboard.instructors.profile', compact('instructor','courses', 'students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit(Instructor $instructor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $instructor = Instructor::find($id);
        $validator = Validator($request->all(),[
            'name_en' => 'required|string',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'photo' => 'required',
        ]);

        if(!$validator->fails())
        {
            $instructor->name = $request->get('name_en');
            $instructor->email = $request->get('email');
            $instructor->age = $request->get('age');
            $instructor->phone_number = $request->get('phone_number');
            $instructor->password = Hash::make($request->get('password'));
            $instructor->gender = $request->get('gender');
            $instructor->code = $request->get('code');
            $instructor->address = $request->get('address');
            if ($request->hasFile('id_photo')){
                $image = time() .'.'.$request -> id_photo->extension();
                $request->id_photo->move(public_path('requirement/uploads/instructors/'),$image);
                $instructor->id_photo = $image;
            }
            if ($request->hasFile('photo')){
                $image = time() .'.'.$request -> photo->extension();
                $request->photo->move(public_path('requirement/uploads/instructors/'),$image);
                $instructor->photo = $image;
            }
            $instructor->university = $request->get('univ');
            $instructor->details = $request->get('detail');
            $isUpdated = $instructor->save();

            return response()->json([
                'message' => $isUpdated ? "Updated Successfully" : "Failed to Update"
            ], $isUpdated ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);

            } else {
            //VALIDATION FAILED في حال فشل الفاليديشن
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructor)
    {
        //
        $isDeleted = $instructor->delete();
        if($isDeleted){
            return response()->json(['icon' => 'success' ,'title' => 'Success!' ,'text' => 'Deleted Successfuly' ,],Response::HTTP_OK);
        } else {
            return response()->json(['icon' => 'error' ,'title' => 'Failed!' ,'text' => 'Deleted Failed ' ,],Response::HTTP_BAD_REQUEST);
        }
    }
}
