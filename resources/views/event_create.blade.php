@extends('layouts.app')

@section('content')
<h1>renseignez les champs</h1>
<section class="event_create">
    <div class="background_event_create">
        <form method="POST" action="{{route('event_store')}}">
        @csrf
        <input id="user_id" type="hidden" name="user_id" value="{{Auth::user()->id}}">
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
                        <div id="event_date_picker">

                        <label for="date">Date</label>
                            <input id="date"type="text" name="date" placeholder="selectionnez une date" autocomplete="off">

                            <label for="time">Heure</label>
                            <input id="time"type="text" name="time" placeholder="HH/MN" autocomplete="off">


                            <label for="duration">Durée</label>
                            <input id="duration"type="text" name="duration" placeholder="HH/MN" autocomplete="off">



                        </div>

                    </div>
                    <div class="info_topsection_animation_creation flexcol">
                        <div>
                            <label for="city">Adresse</label>
                            <input id="city"type="text" name="city" placeholder="ville">
                            <input id="adress"type="text" name="adress" placeholder="adresse">
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
                    <label for="has_equipment">Materiel nécessaire</label>
                    <input class="checkbox" id="has_equipment" type="checkbox" name="has_equipment" checked="">
                </span>
                <span class="checkbox_event_create">
                    <label for="child_authorized">Enfants acceptés</label>
                    <input class="checkbox" id="child_authorized" type="checkbox" name="child_authorized" checked="">
                </span>
                <span class="checkbox_event_create">
                    <label for="has_toilets">Toilettes disponibles</label>
                    <input class="checkbox" id="has_toilets" type="checkbox" name="has_toilets" checked="">
                </span>

            </section>
            <section class="listmateriel">
                <textarea name="list_equipment" id="list_materiel" placeholder="Renseignez la liste du materiel nécessaire"></textarea>
            </section>
            <button type="submit">Créer l'annimation</button>
            <i class="fas fa-times fa-lg close_button clickable" onclick="location.href='/tableaudebord';"></i>
        </form>
    </div>
</section>



@endsection
