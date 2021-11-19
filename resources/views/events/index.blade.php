@include('layouts.app')
{{--@section('content')--}}
@if (Checker::isAdmin() || Checker::isAnim())
    <button><a href="{{route('event_create')}}">créez une animation</a></button>
    <button><a href="{{route('manage')}}">Gerez vos animations</a></button>
@endif

<section class="events">
    <div class="titlesection">
        <h2>Liste des animations</h2>
    </div>
    <div class="event_list">
        @foreach($events as $event)
            <div class="box_event">
                <div class="top_event_section flexrow">
                    <img src="{{ asset('images/event/'. $event->event_picture) }}" alt="#">
                    <div class="rdvsection">
                        <p>{{$event->date}}</p>
                        <p>{{$event->city}}</p>
                        <p>Crée par {{$event->user->first_name}}</p>
                    </div>
                </div>
                <div class="box_event_content">
                    <div class="infosection">
                        <h3>{{$event->title}}</h3>
{{--                        <p>{{$event->description}}</p>--}}
                    </div>
                </div>
                <a href="{{route('event_show', ['event' => $event->id])}}">Voir en détails</a>
            </div>
        @endforeach
    </div>
</section>
{{--@endsection--}}
