<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
    //
    public function index()
    {
        return view('sensorial.auth.login');
    }

    public function login(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|exists:users',
            'password' => 'required'
        ],[
            'email.required' => 'Email field is required',
            'email.exists' => 'Email doesn\'t exist',
            'password.required' => 'Password field is required',
            'password.min' => 'Password must be more than 3 characters',
            'password.max' => 'Password must be less than 30 characters',
        ]);

        // Login Code


        $user = User::where(['email' =>  $request->email])->first();
        // if(!$user || !Hash::check($request->password, $user->password))
        // {
        //     return redirect('sensorial/login')->with('fail', 'Oops, Something wrong! Error email or password');
        // } else {
        //     $request->session()->put('user' , $user);
        //     return redirect('sensorial/home');
        // }

            if(Auth::attempt($request->only('email','password'))){
                return redirect('sensorial/home');
            };

            return redirect('sensorial/login')->with('fail', 'Oops, Something wrong! Error email or password');


        // $user = User::where('email', '=', $request->email)->first();
        // if ($user) {
        //     if (Hash::check($request->password, $user->password)){
        //         return redirect('sensorial/admin/dashboard');
        //     } else {
        //         return redirect()->back();
        //     }
        // } else {
        //     return redirect('sensorial/login');
        // }

        // dd($request->all());
        // return redirect('sensorial/login')->with('fail','Login Details are not valid');

    }

    public function register_view()
    {
        return view('sensorial.auth.sign-up');
    }

    public function register(Request $request)
    {
        // return $request;
        $request->validate([
            'name_en' => 'required|string|unique:users,name_en',
            'name_ar' => 'required|string|unique:users,name_ar',
            'email' => 'required|unique:users|email',
            'phone_number' => 'required|string|unique:users,phone_number',
            'password' => 'required|min:3|max:30',
            'address' => 'required|string',
            'id_photo' => 'required',
            'photo' => 'required',
        ],[
            'name_en.required' => 'Your name is required',
            'name_ar.required' => 'Your name is required',
        ]);

        $user = new User();
        $user->name_en = $request->name_en;
        $user->name_ar = $request->name_ar;
        $user->email = $request->email;
        $user->code = $request->code;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        if ($request->hasFile('id_photo')){
            $id_image = time() .'.'.$request -> id_photo->extension();
            $request->id_photo->move(public_path('requirement/uploads/id_photo/'),$id_image);
            $user->id_photo = $id_image;
        }
        if ($request->hasFile('photo')){
            $image = time() .'.'.$request -> photo->extension();
            $request->photo->move(public_path('requirement/uploads/photo/'),$image);
            $user->photo = $image;
        }
        $user->save();



        // User::create([
        //     'name_en' => $request['name_en'],
        //     'name_ar' => $request['name_ar'],
        //     'email' => $request['email'],
        //     'code' => $request['code'],
        //     'phone_number' => $request['phone_number'],
        //     'password' => $request['password'],
        //     'address' => $request['address'],
        // ]);

        // Login user here

        if(Auth::attempt($request->only('email','password'))){
            return redirect('sensorial/home');
        };

        return redirect('sensorial/sign-up');
    }

    public function forgotPasswordView()
    {
        // View forgot password page

        return view('sensorial.auth.forgot-password');
    }

    public function sendRequestLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(60);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        Mail::send('sensorial.auth.reset-password',['token' => $token], function($message) use ($request) {
                  $message->from($request->email);
                  $message->to('aboodayesh2000@gmail.com');
                  $message->subject('Reset Password Notification');
               });

        return back()->with('message', 'We have e-mailed your password reset link!');


        // dd($request->all());
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/sensorial/login');
    }


}
