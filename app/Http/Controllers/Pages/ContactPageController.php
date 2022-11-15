<?php

namespace App\Http\Controllers\Pages;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class ContactPageController extends Controller
{
    //
    public function store(Request $request)
    {
    $message = new Contact();
        $validator = Validator($request->all(),[
            'name' => 'required|string',
            'message' => 'required|string',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        if(!$validator->fails())
        {
            $message->user_id = $request->user_id;
            $message->name= $request->name;
            $message->email = $request->email;
            $message->phone = $request->phone;
            $message->address = $request->address;
            $message->message = $request->message;

            $isSaved = $message->save();

            return response()->json([
                'message' => $isSaved ? "Message Sent Successfully, We will Replay as soon as possible!" : "Failed to Send Message"
            ], $isSaved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST);

        }else {
            //VALIDATION FAILED في حال فشل الفاليديشن
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
