<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Category::all();
        return view('sensorial.dashboard.categories.index', ['categories' => $data]);
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
        $category = new Category();
        $validator = Validator($request->all(),[
            'name' => 'required|string',
            'detail' => 'required|string',
            'photo' => 'required',
        ]);

        if(!$validator->fails())
        {
            $category->category_name = $request->name;
            if ($request->hasFile('photo')){
                $image = time() .'.'.$request -> photo->extension();
                $request->photo->move(public_path('requirement/uploads/category_photo/'),$image);
                $category->category_photo = $image;
            }
            $category->category_details = $request->detail;
            $isSaved = $category->save();

            return response()->json([
                'message' => $isSaved ? "Created Successfully" : "Failed to Create"
            ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);

        }else {
            //VALIDATION FAILED في حال فشل الفاليديشن
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $category = Category::find($id);
        $courses = Course::where('category_id', '=', $id)->get();
        $categories = Category::where('id', '<>', $id)->get();
        return view('sensorial.dashboard.categories.view-category', compact('category','courses','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $validator = Validator($request->all(),[

        ]);

        if(!$validator->fails())
        {
            $category = Category::find($id);
            $category->category_name = $request->category_name;
            if ($request->hasFile('category_photo')){
                $image = time() .'.'.$request -> category_photo->extension();
                $request->category_photo->move(public_path('requirement/uploads/category_photo/'),$image);
                $category->category_photo = $image;
            }
            $category->category_details = $request->category_detail;
            $isSaved = $category->save();

            return response()->json([
                'message' => $isSaved ? "Category Updated Successfully" : "Failed to Update"
            ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);

        }else {
            //VALIDATION FAILED في حال فشل الفاليديشن
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $isDeleted = $category->delete();
        if($isDeleted){
            return response()->json(['icon' => 'success' ,'title' => 'Success!' ,'text' => 'Deleted Successfuly' ,],Response::HTTP_OK);
        } else {
            return response()->json(['icon' => 'error' ,'title' => 'Failed!' ,'text' => 'Deleted Failed ' ,],Response::HTTP_BAD_REQUEST);
        }
    }
}
