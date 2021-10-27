<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptnController extends Controller
{
    function index(){
        return view('dashboards.captns.index');
    }
    function profile(){
        return view('dashboards.captns.profile');
    }
    function settings(){
        return view('dashboards.captns.settings');
    }
}
