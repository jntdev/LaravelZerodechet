<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VitrineController extends Controller
{
    public function index()
    {
        return view('index',['title'=>'Bienvenue !']);
    }
    public function actu()
    {
        return view('vitrine.actu',['title'=>'Actualités']);
    }
    public function ledefi()
    {
        return view('vitrine.ledefi',['title'=>'Le défi']);
    }
    public function astuces()
    {
        return view('vitrine.astuces',['title'=>'Astuces & ressources']);
    }
    public function rappelzerodechet()
    {
        return view('vitrine.rappelzerodechet',['title'=>'La démarche zéro déchet']);
    }
    public function cartecommercants()
    {
        return view('vitrine.cartecommercants' ,['title'=>'La carte des commerçants']);
    }
    public function ressources()
    {
        return view('vitrine.ressources',['title'=>'Des astuces pour toute la maison']);
    }
    public function produitsmenagers()
    {
        return view('vitrine.produitsmenagers',['title'=>'Les produits ménagers']);
    }
    public function biblio()
    {
        return view('vitrine.biblio',['title'=>'Pour aller plus loin...']);
    }
    public function cuisine()
    {
        return view('vitrine.cuisine',['title'=>'La cuisine']);
    }
    public function salledebain()
    {
        return view('vitrine.salledebain',['title'=>'La salle de bain']);
    }
    public function bureau()
    {
        return view('vitrine.bureau',['title'=>'Le bureau']);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function enfants()
    {
        return view('vitrine.enfants',['title'=>'Les enfants']);

    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function quisommesnous()
    {
        return view('vitrine.quisommesnous',['title'=>'Qui sommes nous ?']);
        //return view('quisommesnous',['title'=>'Qui sommes nous ?']);{{'title'}}
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function contact()
    {
        return view('vitrine.contact',['title'=>'Contact']);
    }
}
