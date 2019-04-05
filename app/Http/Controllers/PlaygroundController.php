<?php

namespace App\Http\Controllers;

use App\Events\WebsocketNotifyEvent;
use App\Events\WebsocketNotifyProductStatus;
use Illuminate\Http\Request;

class PlaygroundController extends Controller
{
    public function play_first_ground(){
        broadcast( new WebsocketNotifyEvent('some data from first play ground') );
        return view('playgrounds.firstpage');
    }

    public function play_second_ground(){
        broadcast( new WebsocketNotifyProductStatus('some status from second play ground') );
        return view('playgrounds.secondpage');
    }

}
