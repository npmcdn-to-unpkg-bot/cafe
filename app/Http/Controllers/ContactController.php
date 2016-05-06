<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ));

        Mail::send(
            'emails.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ),
            function($message)
            {
                $message->from('sender@gmail.com');
                $message->to('cb@gmail.com', 'Admin')->subject('Coffee break Contact');
            }
        );

        Session::flash('success', 'Thanks for contacting us!');
        return redirect('/');
    }
}