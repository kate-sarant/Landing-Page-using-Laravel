<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

class MailController extends Controller
{
    
    public function index(){
        return view('welcome');
    }

    public function sentMail(Request $request){
        $request = [
            'fullname'=> request()->validate(['fullname' => 'required|min:3']),
            'phone'   => request()->validate(['phone' => 'required|digits:10']),
            'email'   => request()->validate(['email' => 'required|email']),
            'message' => request()->validate(['message' => 'required'])
        ];
        // dd($request['email']);
        Mail::to('fake@mail.com')->send(new ContactForm($request['email']));

        return view('welcome')->with('success','Your message have been sent!');
    }

}
