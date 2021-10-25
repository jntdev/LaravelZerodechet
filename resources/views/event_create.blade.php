@include('/componant/header')
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
                    </div>
                    <div class="info_topsection_animation_creation">
                        <div>
                            <label for="localisation">Lieu de l'animation</label>
                            <input id="localisation"type="text" name="location" placeholder="ville">
                        </div>
                        <div>
                            <label for="duration">Durée</label>
                            <input id="duration"type="text" name="duration" placeholder="HH/MN">
                        </div>
                        <div>
                            <label for="date">Date</label>
                            <input id="date"type="text" name="date" placeholder="JJ/MM/AA">
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
                    <input id="materiel" type="checkbox" name="materiel" value="0">
                </span>
                <span class="checkbox_event_create">
                    <label for="child">Enfants acceptés</label>
                    <input id="child" type="checkbox" name="child" value="0">
                </span>
                <span class="checkbox_event_create">
                    <label for="WC">Toilettes disponibles</label>
                    <input id="WC" type="checkbox" name="WC" value="0">
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



@include('/componant/footer');