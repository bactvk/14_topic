<?php

namespace App\Observers;

use App\User;
use Mail;

class UserObserve
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        
        $inputs = [
            'content' => 'Create mail success'." Hello ku ".$user->name,
            'object' => $user->email,
            'subject' => 'MESSAGE CREATE ACCOUNT',
        ];

        Mail::send('frontend.mail.mail_template', ['data' => $inputs ] , function($message) use ($inputs){
                $message -> to($inputs['object'])
                         -> from("noreply@gmail.com","admin System")
                         -> subject($inputs['subject']);
            });
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
