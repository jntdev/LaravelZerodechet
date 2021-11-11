<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoggedController extends Controller
{
    function index(){
        return view('/home');
    }
    function profile(){
        return view('/home');
    }
    function settings(){
        return view('/home');
    }
}