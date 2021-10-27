<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimController extends Controller
{
    function index(){
        return view('dashboards.anims.index');
    }
    function profile(){
        return view('dashboards.anims.profile');
    }
    function settings(){
        return view('dashboards.anims.settings');
    }
}
