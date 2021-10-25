@include('/componant/header')
<button><a href="event_create">créez une animation</a></button>
<section class="events">
    <div class="titlesection">
        <h2>Liste des animations</h2>      
    </div>
    <div class="event_list">
        @foreach($events as $event)
        <div class="box_event">  
            <div class="boxcontent">
                <img src="#" alt="#">
                <div class="box_event_content">
                    <div class="topsection">
                        <h3><a href="{{ route('tableaudebord.event_vue', ['id' => $event -> id])}}">{{$event->title}}</a></h3>
                    </div>
                   <div class="infosection">
                    <p>{{$event->location}}</p>
                    <p>{{$event->date}}</p>
                    <p>{{$event->description}}</p>
                   </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
</section>
