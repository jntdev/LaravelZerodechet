@extends('layouts.app')
@section('content')

    <section class="index_vue_page">
        <aside class="index_vue_panel">
            <div class="button_controller">
                <a href="{{route('event_list')}}"><button class="userbutton">Tableau de bord</button></a>
                <a href="{{route('profile')}}"><button class="userbutton">Mon profil</button></a>
                @if (Checker::isAdmin() || Checker::isAnim())
                    <a href="{{route('event_create')}}"><button class="animbutton">créez une animation</button></a>
                    <a href="{{route('manage')}}"><button class="animbutton">Gerez vos animations</button></a>
                @endif
                @if (Checker::isAdmin())
                    <a href="{{route('all_user')}}"><button class="adminbutton">Tout les participants</button></a>
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
                    <p>Date : {{$event->date->format('d/m/Y')}}</br>
                        Rendez-vous à {{$event->time}}</br>

                        {{$event->city}}</br>
                    <ul>
                        <li>@if($event->has_toilets == '0')
                                WC non disponibles</br>
                            @else
                                WC disponibles</br>
                            @endif</li>
                        <li>@if($event->child_authorized == '0')
                                Non accessible aux enfants :-(</br>
                            @else
                                Enfants Bienvenus ! :)</p>
                            @endif</li>
                    </ul>
                    <h4><u>{{$event->list_equipment ? 'Liste du materiel à apporter' :''}}</u></h4>
                    <p>{{$event->list_equipment}}</p>
                </div>
                <div class="right_event_vue">
                    <h3><u>Description</u></h3>
                    </br>
                    <p>{{$event->description}}</p>
                    </br>
                    </br>

                </div>
            </div>
            </br>

            <p class="ifcomplete">Si l'animation est complète, envoyez moi un mail à <a
                    href="mailto:"{{$event->user->email }}">{{$event->user->email }}</a> et je vous tiendrai au courant
                si une place se libère.</p>
            <section class="inscription_event_vue">

                <span id="{{$stats}}">Nombre de participant inscrit {{$nbPlayers}} /  {{$event->nb_max_user}}</span>
                <a href="{{route('event_registration_view', ['id' => $event->id])}}">
                    <button class="clickable" <?= $stats === 'full' ? 'disabled' : '' ?>>Inscription</button>
                </a>
            </section>

            @if (Checker::isAdmin() || Checker::eventBelongsToCurrentUser($event->user_id))
                <a href="{{route('event_edit', ['id' => $event->id])}}">Modifier l'évènement</a>
                <a href="{{route('event_mailAll', ['id' => $event->id])}}">Ecrire à tout les participants</a>
            @endif
        </section>

    </section>
@endsection
