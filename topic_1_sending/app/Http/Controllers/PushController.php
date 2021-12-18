<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PushController extends Controller
{
    public function index(Request $request)
    {
        if($request->isMethod('POST')){
            $options = array(
                'cluster' => 'ap1',
                'useTLS' => true
              );
              $pusher = new \Pusher\Pusher(
                'cfecdb060c0325550784',
                'fc8c6ade5d271e156727',
                '1318838',
                $options
              );
            
              $data['message'] = $request->contents;
              $pusher->trigger('my-channel-1', 'my-event', $data);

              return view('push.form');
        }
        return view('push.form');
    }

    public function receive()
    {
        return view('push.receive');
    }
}
