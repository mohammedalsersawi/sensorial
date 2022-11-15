<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use App\Models\Section;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lectures = Lecture::all();
        $sections = Section::all();
        return view('sensorial.dashboard.lectures.index', compact('lectures', 'sections'));
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
        $lecture = new Lecture();
        $validator = Validator($request->all(),[
            'lecture_name' => 'required|string',
            'section_id' => 'required',
            'video' => 'required',
            'description' => 'required',
        ]);

        if(!$validator->fails())
        {
           $lecture->lecture_name = $request->get('lecture_name');
           $lecture->section_id = $request->get('section_id');
           $lecture->course_id = $request->get('course_id');
           $lecture->hours = $request->get('hours');
           $lecture->minutes = $request->get('minutes');
           $lecture->announcement = $request->get('announcement');
           $lecture->description = $request->get('description');
           if ($request->hasFile('video')){
                $image = time() .'.'.$request -> video->extension();
                $request->video->move(public_path('requirement/uploads/lectures_videos/'),$image);
                $lecture->video = $image;
            }

            $isSaved = $lecture->save();

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
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $lecture = Lecture::find($id);
        // return $lecture->announcement->announce_comments->replies;
        return view('sensorial.dashboard.lectures.view-lecture', compact('lecture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecture $lecture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $lecture = Lecture::find($id);
        $validator = Validator($request->all(),[
        ]);

        if(!$validator->fails())
        {
           $lecture->lecture_name = $request->get('lec_name');
           $lecture->section_id = $request->get('sect_id');
           $lecture->hours = $request->get('hs');
           $lecture->minutes = $request->get('mn');
           $lecture->announcement = $request->get('ann');
           $lecture->description = $request->get('desc');
           if ($request->hasFile('vid')){
                $image = time() .'.'.$request -> vid->extension();
                $request->vid->move(public_path('requirement/uploads/lecturres_videos/'),$image);
                $lecture->video = $image;
            }

            $isSaved = $lecture->save();

            return response()->json([
                'message' => $isSaved ? "Updated Successfully" : "Failed to Update"
            ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);

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
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecture $lecture)
    {
        //
        $isDeleted = $lecture->delete();
        if($isDeleted){
            return response()->json(['icon' => 'success' ,'title' => 'Success!' ,'text' => 'Deleted Successfuly' ,],Response::HTTP_OK);
        } else {
            return response()->json(['icon' => 'error' ,'title' => 'Failed!' ,'text' => 'Deleted Failed ' ,],Response::HTTP_BAD_REQUEST);
        }
    }
}
