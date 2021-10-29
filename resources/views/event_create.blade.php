@extends('layouts.app')

@section('content')
<h1>renseignez les champs</h1>
<section class="event_create">
    <div class="background_event_create">
        <form method="POST" action="{{route('event_store')}}">
        @csrf
            <div class="event_create_container flexrow">
                <div class="illustration_event">
                    <img src="/images/mpplogo.png" alt="">
                </div>
                <div class="topsection_animation_creation">
                    <div class="info_topsection_animation_creation flexrow">
                        <div>
                            <label for="title">Titre de l'animation</label>
                            <input id="title" class="input_titre"type="text" name="title" placeholder="titre">
                        </div>
                        <div>
                            <label for="duration">Durée</label>
                            <input id="duration"type="text" name="duration" placeholder="HH/MN">
                        
                            <label for="date">Date</label>
                            <input id="date"type="text" name="date" placeholder="JJ/MM/AA">
                        </div>   
                    </div>
                    <div class="info_topsection_animation_creation flexcol">
                        <div>
                            <label for="city">Adresse</label>
                            <input id="city"type="text" name="city" placeholder="ville">
                            <input id="location"type="text" name="location" placeholder="adresse">
                        </div>
                        
                    </div>
                </div>
            </div>
            <section class="description_event">
                <label for="animation_description">Description de l'animation</label>
                <textarea type="text" id="animation_description" name="description" placeholder="Description"></textarea>
            </section>
            <section class="radio_event_create">
                <span class="checkbox_event_create">
                    <label for="materiel">Materiel nécessaire</label>
                    <input class="checkbox" id="materiel" type="checkbox" name="materiel" checked="">
                </span>
                <span class="checkbox_event_create">
                    <label for="child">Enfants acceptés</label>
                    <input class="checkbox" id="child" type="checkbox" name="child" checked="">
                </span>
                <span class="checkbox_event_create">
                    <label for="WC">Toilettes disponibles</label>
                    <input class="checkbox" id="WC" type="checkbox" name="WC" checked="">
                </span>
                
            </section>
            <section class="listmateriel">
                <textarea name="listmateriel" id="listmateriel" placeholder="Renseignez la liste du materiel nécessaire"></textarea>
            </section>
            <button type="submit">Créer l'annimation</button>
            <i class="fas fa-times fa-lg close_button clickable" onclick="location.href='/tableaudebord';"></i>
        </form>
    </div>
</section>



@endsection