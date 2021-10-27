@include('/componant/header')
<button><a href="event_create">créez une animation</a></button>
<section class="events">
    <div class="titlesection">
        <h2>Liste des animations</h2>      
    </div>
    <div class="event_list">
        @foreach($events as $event)
        <div class="box_event">  
            
                <div class="top_event_section flexrow">
                    <img src="images/logo.png" alt="#">
                    <div class="rdvsection">
                        <p>{{$event->date}}</p>
                        <p>{{$event->city}}</p>
                        
                    </div>
                </div>
                
                <div class="box_event_content">
                    <!-- <div class="topsection">
                        
                    </div> -->
                    <div class="infosection">
                    
                    <h3>{{$event->title}}</h3>
                    <p>{{$event->description}}</p>
                    </div>
                </div>
                <div class="bot_event_section">
                       <a href="{{ route('tableaudebord.event_vue', ['id' => $event -> id])}}"><button>
                           Voir plus
                       </button></a>
                       
                   </div>
                </div>
         
        
        @endforeach
    </div>
    
</section>

