@extends('layouts.app')
@section('content')

    <section class="index_vue_page">
        <aside class="index_vue_pannel">
            <div class="button_controller">
                <a href="{{route('event_list')}}"><button class="userbutton">Tableau de bord</button></a>
                <a href="{{route('registered')}}"><button class="userbutton">Vos inscriptions</button></a>
                <a href="{{route('profile')}}"><button class="userbutton">Votre profil</button></a>
                @if (Checker::isAdmin() || Checker::isAnim())
                    <a href="{{route('event_create')}}"><button class="animbutton">créez une animation</button></a>
                    <a href="{{route('manage')}}"><button class="animbutton">Gerez vos animations</button></a>
                @endif
            </div>
            <div class="calendar"></div>
        </aside>
    <section class="container_event_vue backoffice_borderleft">
       <img src="{{ asset('images/event/'. $event->event_picture) }}" alt="">
        <div class="event_vue_title">
            <h2>{{$event->title}}</h2>
        </div>
        <div class="info_event_vue">
            <div class="left_event_vue">
                <p>Date : {{$event->date->format('d/m/Y')}}</p>
                <p>Rendez-vous à {{$event->time}}</p>

                <p>{{$event->city}}</p>
                @if($event->WC == '0')
                    <p>WC non disponibles</p>
                @else
                    <p>WC disponibles</p>
                @endif
                @if($event->child == '0')
                    <p>Non accessible aux enfants :-(</p>
                @else
                    <p>Enfants Bienvenus ! :)</p>
                @endif
            </div>
            <div class="right_event_vue">
                <p>{{$event->description}}</p> </br>
            <!-- <p>Rendez vous au {{$event->location}} à {{$event->city}} !</p> -->
                <p>{{$event->list_equipment}}</p>
                <p>Si l'animation est complète, envoyez moi un mail à <a href="mailto:"{{$event->user->email }}">{{$event->user->email }}</a> et je vous tiendrai au courant si une place se libère.</p>
            </div>
        </div>
        <section class="inscription_event_vue">
            <span id="{{$stats}}">Nombre de participant inscrit {{$nbPlayers}} /  {{$event->nb_max_user}}</span>
            <a href="{{route('event_registration_view', ['id' => $event->id])}}">
                <button class="clickable" <?= $stats === 'full' ? 'disabled' : '' ?>>Inscription</button>
            </a>
        </section>
        @if (Checker::isAdmin() || Checker::eventBelongsToCurrentUser($event->user_id))
            <a href="{{route('event_edit', ['id' => $event->id])}}">Modifier l'évènement</a>
        @endif
    </section>
    </section>
@endsection
