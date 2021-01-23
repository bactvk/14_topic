<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail;
use App\Events\SendMailEvent;

class Usercontroller extends Controller
{
    public function signUp(Request $request)
    {
    	if($request->isMethod('post')){
    		User::create($request->only('name','email'));

    		// send mail
    			// event, listener
    		// $inputs = [
    		// 	'content' => 'Create mail success'." Hello ku ".$request->name,
    		// 	'object' => $request->email,
    		// 	'subject' => 'MESSAGE CREATE ACCOUNT',
    		// ];

    		// event(new SendMailEvent($inputs));

    			// observe
    			// auto

    		return redirect()->route('signUp')->with('success','Create success');
    	}

    	return view('users/sign-up');
    }
}