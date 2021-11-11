<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimController extends Controller
{
    function index(){
        return view('dashboards.index');
    }
    function profile(){
        return view('dashboards.anims.profile');
    }
    function settings(){
        return view('dashboards.anims.settings');
    }
    // function tableaudebord(){
    //     return view('tableaudebord');
    // }
    // function event_create(){
    //     return view('event_create');
    // }
    // function event_store(){
    //     return view('success_create_event');
    // }
    
}
