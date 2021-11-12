<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;

class LoggedController extends Controller
{

   
    function index(){
        return view('/home');
    }
    function user_profile(){
        
        return view('/user_profile');
    }
    function settings(){
        return view('/home');
    }
    
    //fonction qui supprime l'utilisateur de la bdd
    public function delete(Request $request){
        
        $user=user::find($request->user_id);
        
        $user->delete();
        $request->session()->invalidate();
        return redirect('/');
    }
}