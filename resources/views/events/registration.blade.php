@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">
                        <form method="POST" action="{{route('event_registration_submit')}}">
                            @csrf
                            <input id="event_id" type="hidden" name="event_id" value="{{$event->id}}">
                            <input id="user_id" type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <div class="form-group row">
                                <label for="nb_participant" class="col-md-4 col-form-label text-md-right">
                                    {{ __('Nombre de personne que vous inscrivez') }}
                                </label>
                                <div class="col-md-6">
                                    <input class="form-control" id="nb_participant" type="number" name="nb_participant" value="{{$user->user_id ?? ''}}" required>
                                </div>
                            </div>
                            <button type="submit">M'inscrire !</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
