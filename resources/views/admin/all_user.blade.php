@extends('layouts.app')
@section('content')
    <section class="index_vue_page">
        <aside class="index_vue_panel">
            <div class="button_controller">
                <a href="{{route('event_list')}}"><button class="userbutton">Tableau de bord</button></a>
                <a href="{{route('registered')}}"><button class="userbutton">Vos inscriptions</button></a>
                @if (Checker::isAdmin() || Checker::isAnim())
                    <a href="{{route('event_create')}}"><button class="animbutton">créez une animation</button></a>
                    <a href="{{route('manage')}}"><button class="animbutton">Gerez vos animations</button></a>
                @endif
            </div>
            <div class="calendar"></div>
        </aside>
        <div class="container backoffice_borderleft ">
            <h2>Liste de tout les participants</h2>

            <div class="row justify-content-center ">
                <div class="col-md-8">
                    @foreach($users as $user)
                    <div class="card border-info admincard">
                        <div class="userinfos">
                           <div>{{$user->first_name}}</div>
                           <div>{{$user->last_name}}</div>
                            <div>{{$user->email}}</div>
                        </div>
                        <div class="adminpanel">
                            <a href="{{route('profile_FromAdmin', ['user' => $user->id])}}">
                                <button class="btn btn-primary">Editer</button>
                            </a>
                        </div>


                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
