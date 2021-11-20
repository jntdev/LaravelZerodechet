@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            {{--                        INPUT NB_players--}}
                            <input id="event_id" type="hidden" name="event_id" value="{{$event}}">
                            <input id="user_id" type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                            <div class="form-group row">
                                <label for="last_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Nombre de personne que vous inscrivez') }}</label>

                                <div class="col-md-6">
                                    <input id="nb_player" type="text"
                                           class="form-control @error('last_name') is-invalid @enderror"
                                           name="nb_player" value="{{$user->user_id ?? ''}}" required autocomplete="last_name"
                                           autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
