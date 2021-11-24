@extends('layouts.app')
@section('content')
    <section class="container_event_vue">
       <img src="{{ asset('images/event/'. $event->event_picture) }}" alt="">
        <div class="event_vue_title">
            <h2>{{$event->title}}</h2>
        </div>
        <div class="info_event_vue">
            <div class="left_event_vue">
                <p>Date : {{$event->date}}</p>
            {{$event->time}}
                <p>Durée : {{$event->duration}}</p>
                <p>{{$event->city}}</p>
                @if($event->WC == "1")
                    <p>WC disponibles</p>
                @else
                    <p>WC non disponibles</p>
                @endif
                @if($event->child == "1")
                    <p>Enfants bienvenus :-)</p>
                @else
                    <p>Non accessible aux enfants :-(</p>
                @endif
            </div>
            <div class="right_event_vue">
                <p>{{$event->description}}</p> </br>
            <!-- <p>Rendez vous au {{$event->location}} à {{$event->city}} !</p> -->
                <p>{{$event->listmateriel}}</p>
            </div>
        </div>
        <section class="inscription_event_vue">
            @if (Checker::isAdmin() || Checker::isAnim())
                <a href="{{route('manage')}}">
                    <button class="return_tolist clickable">Panneau de gestion</button>
                </a>
            @endif
            <a href="../event_index">
                <button class="return_tolist clickable">Retour à la liste</button>
            </a>
            <span id="{{$stats}}">Nombre de participant inscrit {{$nbPlayers}} /  {{$event->nb_max_user}}</span>
            <a href="{{route('event_registration_view', ['id' => $event->id])}}">
                <button class="clickable" <?= $stats === 'full' ? 'disabled' : '' ?>>Inscription</button>
            </a>
        </section>
        @if (Checker::isAdmin() || Checker::eventBelongsToCurrentUser($event->user_id))
            <a href="{{route('event_edit', ['id' => $event->id])}}">Modifier l'évènement</a>
        @endif
    </section>
@endsection
