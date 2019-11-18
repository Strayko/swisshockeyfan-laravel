<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function sendEmail(Request $request)
    {
        $data = $request->all();

        Mail::send('email', $data, function($message) use ($data) {
            $message->to($data['email'])->subject($data['subject']);
        });

        Session::flash('form_submitted', 'Form is sent!');
        return redirect()->back();
    }
}
