<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs\sendEmail;
use App\Mail\TestMail;


class MailController extends Controller
{
    public function index()
    {
    	$startTime = microtime(true);
    	// \Artisan::call("queue:work");
    	for($i = 0 ;$i < 2 ;$i++){
    		$testMail = new TestMail();

    		$sendMailJob = new sendEmail($testMail);
    		
    		

    		dispatch($sendMailJob);
    	}
    	$endTime = microtime(true);
    	$timeExecute = $endTime - $startTime;
    	return "Done. Time execute: $timeExecute";
    }
}
