<?php

namespace App\Listeners;

use App\Events\HasExceptionEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

//add


use App\Notifications\HasExceptionNotification;
use Notification;
use Exception;
use Helper;

class HasExceptionListener
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
     * @param  HasExceptionEvent  $event
     * @return void
     */
    public function handle(HasExceptionEvent $event)
    {
    
        $notify = new HasExceptionNotification($event);
      
        $slackWebHookUrl = Helper::WebHooksURL;

        Notification::route('slack', $slackWebHookUrl)->notify($notify);
    }
}
