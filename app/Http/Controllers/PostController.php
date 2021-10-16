<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function actu()
    {
        return view('actu');
    }
    public function ledefi()
    {
        return view('ledefi');
    }
    public function astuces()
    {
        return view('astuces');
    }
    public function rappelzerodechet()
    {
        return view('rappelzerodechet');
    }
    public function cartecommercants()
    {
        return view('cartecommercants');
    }
    public function ressources()
    {
        return view('ressources');
    }
    public function produitsmenagers()
    {
        return view('produitsmenagers');
    }
    public function biblio()
    {
        return view('biblio');
    }
    public function cuisine()
    {
        return view('cuisine');
    }
    public function salledebain()
    {
        return view('salledebain');
    }
    public function bureau()
    {
        return view('bureau');
    }
    public function enfants()
    {
        return view('enfants');
    }
    public function quisommesnous()
    {
        return view('quisommesnous');
    }
    public function contact()
    {
        return view('contact');
    }
    
}
