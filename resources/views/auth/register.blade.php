@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('register') }}">
                            @csrf
                            {{--                        INPUT NOM--}}
                            <div class="form-group row">
                                <label for="last_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text"
                                           class="form-control @error('last_name') is-invalid @enderror"
                                           name="last_name" value="" required autocomplete="last_name"
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
                                           name="first_name" value="" required
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
                                           value="" required autocomplete="email">

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
                                           required autocomplete="new-password" placeholder="8 caractères minimum ">

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
                                           class="form-control" name="phone_nb"
                                           value="">
                                </div>
                            </div>
                            {{--                            INPUT CAPITAIN--}}
                            <div class="form-group row">
                                <label for="team_name2"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Nom de l\'équipe') }}</label>
                                <div class="col-md-6">
                                    <select id="team_name2" name="team_name" class="custom-select custom-select-md mb-3">
                                        <option selected>Sélectionnez votre équipe</option>
                                        <option value="Sans équipe">Sans équipe</option>
                                        <option value="Les Tricotards">Les Tricotards</option>
                                        <option value="To be tri">To be tri</option>
                                        <option value=" Le Corps-Bousier"> Le Corps-Bousier</option>
                                        <option value="Waste-busters">Waste-busters</option>
                                        <option value="Tris'k'ailes">Tris'k'ailes</option>
                                        <option value="Les parfaits consignés">Les parfaits consignés</option>
                                        <option value="Yes We Try !">Yes We Try !</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-7 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{  Auth::check() ? 'Modifier mon profil' : 'S\'enregistrer' }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
