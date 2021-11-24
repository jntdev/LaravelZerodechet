@extends('layouts.app')
@section('content')
@if (Checker::isAdmin() || Checker::isAnim())
    <button><a href="{{route('event_create')}}">créez une animation</a></button>
@endif
<section class="events">
    <div class="titlesection">
        <h2>Liste des animations</h2>
    </div>
    <div class="event_list">
       {{-- @if($events -> count()== 0)
            <p>Vous ne vous êtes pas encore inscrit à une animation</p>
        @endif--}}
        @foreach($registrations as $registration)
            <div class="box_event">
                <div class="top_event_section flexrow">
                    <img src="{{ asset('images/event/'. events()->$event->event_picture) }}" alt="#">
                    <div class="rdvsection">
                        <p>{{$event->date}}</p>
                        <p>{{$event->city}}</p>
                        <p>Crée par {{$events->user->first_name}}</p>
                    </div>
                </div>
                <div class="box_event_content">
                    <!-- <div class="topsection">

                    </div> -->
                    <div class="infosection">
                        <h3>{{$events->title}}</h3>
                        <p>{{$events->description}}</p>
                    </div>
                </div>
                {{--<div class="bot_event_section">
                    <div class="adminoption">
                        <a href="{{ route('tableaudebord.show', ['id' => $event->id])}}">
                            <button>
                                Voir plus
                            </button>
                        </a>
                        @if (Checker::isAdmin()||Checker::canDeleteEvent($event->user_id))
                            <a href="{{ route('tableaudebord.edit', ['id' => $event->id])}}">
                                <button>modifier</button>
                            </a>
                        @endif
                    </div>
                </div>--}}
                <a href="{{route('event_show', ['event' => $event->id])}}">Voir en détails</a>
            </div>
        @endforeach
    </div>
@endsection
