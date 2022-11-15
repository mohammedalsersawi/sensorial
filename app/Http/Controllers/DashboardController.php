<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Admin;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function showDash()
    {
        $messages = Contact::orderBy('created_at', 'DESC')->get();
        $messagesCount = Contact::all()->count();
        return response()->view('sensorial.dashboard.admins.admin-dashboard',compact('messages','messagesCount'));
    }

    public function showParent()
    {
        $messages = Contact::orderBy('created_at', 'DESC')->get();
        $messagesCount = Contact::all()->count();
        return response()->view('sensorial.dashboard.admins.admin-parent',compact('messages','messagesCount'));
    }
}
