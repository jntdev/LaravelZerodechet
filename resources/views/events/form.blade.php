@extends('layouts.app')

@section('content')
    <h1>renseignez les champs</h1>
    <section class="event_create">
        <div class="background_event_create">
            <form method="POST" action="{{route('event_store')}}">
                @csrf
                <input id="event_id" type="hidden" name="event_id" value="{{$event->id ?? ''}}">
                <input id="user_id" type="hidden" name="user_id" value="{{$event->user_id ?? Auth::user()->id}}">
                <div class="event_create_container flexrow">
                    <div class="illustration_event">
                        <img src="/images/mpplogo.png" alt="">
                    </div>
                    <div class="topsection_animation_creation">
                        <div class="info_topsection_animation_creation flexrow">
                            <div>
                                <label for="title">Titre de l'animation</label>
                                <input id="title" class="input_titre" type="text" name="title" placeholder="titre" value="{{$event->title ?? ''}}">
                            </div>
                            <div id="event_date_picker">
                                <label for="date">Date</label>
                                <input id="date" type="text" name="date" placeholder="selectionnez une date" autocomplete="off" value="{{$event->date ?? ''}}">
                                <label for="time">Heure</label>
                                <input id="time" type="text" name="time" placeholder="HH/MN" autocomplete="off value="{{$event->time ?? ''}}">
                                <label for="duration">Durée</label>
                                <input id="duration" type="text" name="duration" placeholder="HH/MN" autocomplete="off" value="{{$event->duration ?? ''}}">
                            </div>
                        </div>
                        <div class="info_topsection_animation_creation flexcol">
                            <div>
                                <label for="city">Addresse</label>
                                <input id="city" type="text" name="city" placeholder="ville" value="{{$event->city ?? ''}}">
                                <input id="address" type="text" name="address" placeholder="adresse" value="{{$event->address ?? ''}}">
                            </div>
                        </div>
                    </div>
                </div>
                <section class="description_event">
                    <label for="animation_description">Description de l'animation</label>
                    <textarea type="text" id="animation_description" name="description" placeholder="Description">
                        {{$event->description ?? ''}}
                    </textarea>
                </section>
                <section class="radio_event_create">
                <span class="checkbox_event_create">
                    <label for="has_equipment">Materiel nécessaire</label>
                    <input class="checkbox" id="has_equipment" type="checkbox" name="has_equipment" checked="" value="{{$event->has_equipment ?? ''}}">
                </span>
                    <span class="checkbox_event_create">
                    <label for="child_authorized">Enfants acceptés</label>
                    <input class="checkbox" id="child_authorized" type="checkbox" name="child_authorized" checked="" value="{{$event->child_authorized ?? ''}}">
                </span>
                    <span class="checkbox_event_create">
                    <label for="has_toilets">Toilettes disponibles</label>
                    <input class="checkbox" id="has_toilets" type="checkbox" name="has_toilets" checked="" value="{{$event->has_toilets ?? ''}}">
                </span>

                </section>
                <section class="listmateriel">
                    <textarea name="list_equipment" id="list_materiel" placeholder="Renseignez la liste du materiel nécessaire">
                        {{$event->list_equipment ?? ''}}
                    </textarea>
                </section>
                <button type="submit">
                    <?= (!empty($edit)) ? 'Modifier l\'animation' : 'Enregistrer l\'animation' ?>
                </button>
                <i class="fas fa-times fa-lg close_button clickable" onclick="location.href='/tableaudebord';"></i>
            </form>
            @if (!empty($edit))
                <a href="{{route('event_delete', ['id' => $event->id])}}">
                    <button type="alert" style="background-color: red">supprimer l'animation</button>
                </a>
            @endif
        </div>
    </section>
@endsection
