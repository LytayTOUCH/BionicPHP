<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaygroundController extends Controller
{
    public function play_first_ground(){
        return view('playgrounds.firstpage');
    }
}
