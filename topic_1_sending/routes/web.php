<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Notifications\newMessage;


Route::match(['get','post'],'/','SendController@send')->name('send');


Route::get('/send', function() {
    Notification::route('slack', env('SLACK_WEBHOOK'))
      ->notify(new newMessage());
    
});

Route::match(['get','post'],'/sign-up','UserController@signUp')->name('signUp');

// Push notify
Route::match(['get','post'],'/push','PushController@index')->name('index');

Route::get('/push/receive','PushController@receive')->name('receive');
