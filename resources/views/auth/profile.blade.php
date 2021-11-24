@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('user_update') }}">
                            @csrf
                            @method('PUT')

                            {{--                        INPUT NOM--}}
                            <div class="form-group row">
                                <label for="last_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text"
                                           class="form-control @error('last_name') is-invalid @enderror"
                                           name="last_name" value="{{$user->last_name}}" required autocomplete="last_name"
                                           autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{--                        INPUT PRENOM--}}
                            <div class="form-group row">
                                <label for="first_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text"
                                           class="form-control @error('first_name') is-invalid @enderror"
                                           name="first_name" value="{{$user->first_name}}" required
                                           autocomplete="first_name" autofocus>

                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{--                            INPUT MAIL--}}
                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{$user->email}}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{--                        INPUT PASSWORD--}}
                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- INPUT CONFIRM--}}
                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirmation') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            {{--                        INPUT PHONE--}}
                            <div class="form-group row">
                                <label for="phone_nb"
                                       class="col-md-4 col-form-label text-md-right">Numéro de téléphone</label>

                                <div class="col-md-6">
                                    <input id="phone_nb" type="text"
                                           class="form-control @error('phone_nb') is-invalid @enderror" name="phone_nb"
                                           value="{{$user->phone_nb}}"required autocomplete="Numéro de téléphone">

                                    @error('phone_nb')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{--                            INPUT CAPITAIN--}}
                            <div class="form-group row">
                                <label for="captn_mail"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Email du Capitaine') }}</label>

                                <div class="col-md-6">
                                    <input id="captn_mail" type="text"
                                           class="form-control @error('captn_mail') is-invalid @enderror" name="captn_mail"
                                           value="{{$user->captn_mail}}"required autocomplete="Email du Capitaine">

                                    @error('captn_mail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-7 offset-md-4">
                                    <a href="{{route('user_update')}}">
                                    <button type="submit" class="btn btn-primary">
                                       Modifier mon profil
                                    </button>
                                    </a>

                                </div>
                            </div>
                        </form>
                        <a href="{{route('user_delete')}}">
                            <button type="alert" class="btn btn-danger">
                                Supprimer mon compte
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
