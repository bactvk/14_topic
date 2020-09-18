<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Helper;
use Mail;

class SendController extends Controller
{
    public function send(Request $request)
    {
    	if($request->isMethod('post'))
    	{
    		$inputs = [
    			'choice_send' => $request->choice_send,
    			'object' => $request->object,
    			'subject' => $request->subject,
    			'content' => $request->content
    		];
    		if($inputs['choice_send'] == "email"){
    			$this->sendByEmail($inputs);

    			return redirect()->route('send')->with('success','Sendding is success');
    		}
    	}
    	return view('frontend.index');
    }


    public function sendByEmail($inputs)
    {
    	// Helper::setUpConfigAccountInfo();
    	
    	Mail::send('frontend.mail.mail_template', ['data' => $inputs ] , function($message) use ($inputs){
    		
    		$message -> to($inputs['object'])
    				 -> from("noreply@gmail.com","admin System")
    				 -> subject($inputs['subject']);
    	});
    	
    }
}
