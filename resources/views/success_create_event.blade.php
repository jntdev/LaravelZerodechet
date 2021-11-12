@extends('layouts.app')

@section('content')

    <section class="success_create_event">
        <div class="success_event_content">
            <p>Vous avez créé une nouvelle animation</br>
                vous serez averti par mail à chaque nouvelle inscription</p>
            <div class="flexrow success_comeback">
                <a href="tableaudebord/events">
                    <button>Revenir au tableau de bord</button>
                </a>
                <a href="tableau_anim">
                    <button>Revenir à la gestion des animations</button>
                </a>
            </div>
        </div>


    </section>




@endsection
