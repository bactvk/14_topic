<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\SendMailEvent;
use Mail;

class SendMailListener 
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(SendMailEvent $event)
    {
        $inputs = $event->inputs;


        Mail::send('frontend.mail.mail_template', ['data' => $inputs ] , function($message) use ($inputs){
                $message -> to($inputs['object'])
                         -> from("noreply@gmail.com","admin System")
                         -> subject($inputs['subject']);
            });
    }
}
