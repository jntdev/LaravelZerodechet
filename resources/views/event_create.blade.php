@include('/componant/header')

<h1>Liste des events</h1>

@foreach($events as $event)
<h2><a href="{{ route('event_create.event_vue', ['id' => $event -> id])}}">{{$event->title}}</a></h2>
@endforeach