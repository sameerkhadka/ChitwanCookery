<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class EmailController extends Controller
{
    public function send(Request $request){
        $data=[
            'form_email'=>$request->email,
            'form_name'=>$request->name, 
            'form_phone' => $request->phone,
            'form_message'=>$request->message
        ];
       
        Mail::send('emails.email', $data, function($message) use ($data){
            $message->from($data['form_email'],$data['form_name']);
            $message->to('sameerkhadka3@gmail.com');
            $message->subject('Message From Contact form');
        });        
    return back()->with('success','Message Sent Successfully');
}
}
