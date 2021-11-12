@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Profil utilisateur</h2>
                <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->

                    <div class="card-body user_profil_form">

                        <form method="GET" action="">
                            @csrf
                            <div>
                                <label for="name">Nom</label>
                                <input type="text" id="name" name="name" placeholder="Nom"
                                       value="{{Auth::user()->name}}">
                            </div>
                            <div>
                                <label for="email">E-mail</label>
                                <input type="text" id="email" name="email" placeholder="Email"
                                       value="{{Auth::user()->email}}">

                            </div>
                            <div>
                                <label for="adress">Adresse</label>
                                <input type="text" id="adress" name="adress" placeholder="Adresse"
                                       value="{{Auth::user()->adress}}">

                            </div>
                            <div>
                                <label for="adress">Code Postal</label>
                                <input type="text" id="zipcode" name="zipcode" placeholder="Code Postal"
                                       value="{{Auth::user()->zipcode}}">

                            </div>
                            <div>
                                <label for="adress">Ville</label>
                                <input type="text" id="city" name="city" placeholder="city"
                                       value="{{Auth::user()->city}}">

                            </div>
                            <div>
                                <label for="adress">Numéro de téléphone</label>
                                <input type="text" id="phone_nb" name="phone_nb" placeholder="Numéro de téléphone"
                                       value="{{Auth::user()->phone_nb}}">

                            </div>

                            <div>

                                <a href="" class="btn btn-info">Editer<</a>

                                <a href="" class="btn btn-danger"
                                   onclick="{document.getElementById('user_delete').submit();}">Supprimer</a>

                            </div>
                        </form>
                        <form id="user_delete" action="{{route('user_delete')}}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <button type="submit">delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
