<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Helper;
use Mail;


use App\Notifications\FirstNotification;
use Notification;
use Nexmo;

class SendController extends Controller
{
    public function send(Request $request)
    {
        //dd(config('mail')); // SAVE LAI

    	if($request->isMethod('post')) // 
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
    		} else if($inputs['choice_send'] == "slack"){

                $this->sendToSlack($inputs);
                return redirect()->route('send')->with('success','Sendding is success');
            } else if($inputs['choice_send'] == "sms"){
                $this->sendBySMS($inputs);
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

    public function sendToSlack($data) // content 
    {
        $notify = new FirstNotification($data);
      
        $slackWebHookUrl = Helper::WebHooksURL; // https://app.slack.com/client/T01AH59TLEB/C01B14882LS
        // bac-d3l3031.slack.com
        Notification::route('slack', $slackWebHookUrl)->notify($notify);
    }

    public function sendBySMS($data)
    {
        $code = rand(100000, 999999);
        
        $msg = $data['content'] . ": " . $code . " kmt";

        return Nexmo::message()->send([
            'to'   => '+84347091952',
            'from' => '+84357170911',
            'text' => $msg
        ]);
    }
}
