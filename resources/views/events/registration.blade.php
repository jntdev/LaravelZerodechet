@extends('layouts.app')
@section('content')
    <section class="index_vue_page">
        <aside class="index_vue_panel">
            <div class="button_controller">
                <a href="{{route('event_list')}}">
                    <button class="userbutton">Tableau de bord</button>
                </a>
                <a href="{{route('registered')}}">
                    <button class="userbutton">Vos inscriptions</button>
                </a>
                @if (Checker::isAdmin() || Checker::isAnim())
                    <a href="{{route('event_create')}}">
                        <button class="animbutton">créez une animation</button>
                    </a>
                    <a href="{{route('manage')}}">
                        <button class="animbutton">Gerez vos animations</button>
                    </a>
                @endif
                @if (Checker::isAdmin())
                    <a href="{{route('all_user')}}">
                        <button class="adminbutton">Tout les participants</button>
                    </a>
                @endif
            </div>
            <div class="calendar"></div>
        </aside>
        <div class="container backoffice_borderleft ">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body relative">
                            <form method="POST" action="{{route('event_registration_submit')}}">
                                @csrf
                                <input id="registration_id" type="hidden" name="registration_id"
                                       value="{{$registrations->id ?? ''}}">
                                <input id="event_id" type="hidden" name="event_id" value="{{$event->id}}">
                                <input id="user_id" type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <div class="form-group row">
                                    <label for="nb_participant" class="col-md-4 col-form-label text-md-right">
                                        {{ __('Nombre de personne que vous inscrivez') }}
                                    </label>
                                    <div class="col-md-6">
                                        <input class="form-control" id="nb_participant" type="number"
                                               name="nb_participant"
                                               value="{{$currentUserRegistration->nb_players ?? ''}}" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary"
                                        type="submit">{{$currentUserRegistration ? 'Modifier mon inscription' :'M\'enregistrer'}}</button>
                            </form>
                            @if($currentUserRegistration !== null)
                                <form method="POST" action="{{route('event_registration_delete')}}">
                                    @csrf
                                    <input id="event_id" type="hidden" name="event_id" value="{{$event->id}}">
                                    <input id="nb_participant" type="hidden" name="nb_participant"
                                           value="{{$currentUserRegistration->nb_players}}">
                                <a class="excentersupprbutton">
                                    <button class="btn btn-danger" type="submit">Supprimer mon inscription</button>
                                </a>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
