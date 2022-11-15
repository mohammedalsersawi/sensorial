<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class InstructorAuthController extends Controller
{
    //
    public function show_login()
    {
        return view('sensorial.dashboard.auth.instructor-login');
    }

    public function login(Request $request)
    {
        $validator = Validator($request->all(), [
            'email' => 'required|email|exists:instructors,email',
            'password' => 'required|string|min:3|max:30'
        ]);

        if(!$validator->fails()) {
            $credintials = [
                'email' => $request->get('email'),
                'password' =>  $request->get('password'),
            ];

            if(Auth::guard('instructor')->attempt($credintials)) {
                return response()->json([
                    'message' => 'Logged in successfully'
                ], Response::HTTP_OK);
            } else {
                return response()->json([
                    'message' => 'Login Failed, wrong credintials'
                ], Response::HTTP_BAD_REQUEST);
            }

        } else {
            return response()->json([
                'message'=>$validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
