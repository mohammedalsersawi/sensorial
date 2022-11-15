<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = User::all();
        return response()->view('sensorial.dashboard.customers.index',['customers' => $data]);
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
         $image ='';
        //
        $customer = new User();
        $validator = Validator($request->all(),[
            'name_en' => 'required|string',
            'name_ar' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'id_photo' => 'required',
            'photo' => 'required',
        ]);

        if(!$validator->fails())
        {
            $customer->name_en = $request->get('name_en');
            $customer->name_ar = $request->get('name_ar');
            $customer->email = $request->get('email');
            $customer->password = Hash::make($request->get('password'));
            $customer->code = $request->get('code');
            $customer->phone_number = $request->get('phone_number');
            $customer->address = $request->get('address');
            if ($request->hasFile('id_photo')){
                $image = time() .'.'.$request -> id_photo->extension();
                $request->id_photo->move(public_path('requirement/uploads/id_photo/'),$image);
                $customer->id_photo = $image;
            }
            if ($request->hasFile('photo')){
                $image = time() .'.'.$request -> photo->extension();
                $request->photo->move(public_path('requirement/uploads/photo/'),$image);
                $customer->photo = $image;
            }
            $isSaved = $customer->save();

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $customer = User::find($id);
        $validator = Validator($request->all(),[
            'name_en' => 'required|string',
            'name_ar' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'photo' => 'required',
        ]);

        if(!$validator->fails())
        {
            $customer->name_en = $request->get('name_en');
            $customer->name_ar = $request->get('name_ar');
            $customer->email = $request->get('email');
            $customer->phone_number = $request->get('phone_number');
            $customer->address = $request->get('address');
            if ($request->hasFile('id_photo')){
                $image = time() .'.'.$request -> id_photo->extension();
                $request->id_photo->move(public_path('requirement/uploads/id_photo/'),$image);
                $customer->id_photo = $image;
            }
            if ($request->hasFile('photo')){
                $image = time() .'.'.$request -> photo->extension();
                $request->photo->move(public_path('requirement/uploads/photo/'),$image);
                $customer->photo = $image;
            }
            $isUpdated = $customer->save();

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $isDeleted = User::find($id)->delete();
        if($isDeleted){
            return response()->json(['icon' => 'success' ,'title' => 'Success!' ,'text' => 'Deleted Successfuly' ,],Response::HTTP_OK);
        } else {
            return response()->json(['icon' => 'error' ,'title' => 'Failed!' ,'text' => 'Deleted Failed ' ,],Response::HTTP_BAD_REQUEST);
        }
    }
}
