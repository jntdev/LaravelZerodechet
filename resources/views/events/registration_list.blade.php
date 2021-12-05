@extends('layouts.app')
@section('content')
    <section class="index_vue_page">
        <aside class="index_vue_panel">
            <div class="button_controller">
                <a href="{{route('profile')}}"><button class="userbutton">Mon profil</button></a>
                <a href="{{route('event_list')}}"><button class="userbutton">Tableau de bord</button></a>
                <a href="{{route('registered')}}"><button class="userbutton">Vos inscriptions</button></a>
                @if (Checker::isAdmin() || Checker::isAnim())
                    <a href="{{route('event_create')}}"><button class="animbutton">Créez une animation</button></a>
                    <a href="{{route('manage')}}"><button class="animbutton">Gerez vos animations</button></a>
                @endif
                @if (Checker::isAdmin())
                    <a href="{{route('all_user')}}"><button class="adminbutton">Tous les participants</button></a>
                @endif
            </div>
            <div class="calendar"></div>
        </aside>
        <div class="container backoffice_borderleft ">
            <h2>Liste de tout les participants</h2>

            <div class="row justify-content-center ">




                <div class="col-md-8">
                    <a class="mailToAll_link" href="{{route('event_mailAll', ['id' => $event->id])}}">Ecrire à tous les participants</a>
                    @foreach($users as $user)
                        <div class="card border-info admincard">
                            <div class="userinfos_eventlist">
                                <div class="div1">{{$user->first_name}}</div>
                                <div class="div2">{{$user->last_name}}</div>
                                <div class="div3">{{$user->email}}</div>
                                <div class="div4">{{$user->phone_nb}}</div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
