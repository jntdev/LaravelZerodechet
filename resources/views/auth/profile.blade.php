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
                    <div class="card border-info">
                        <div class="card-body bottomform relative">
                            <form method="POST" action="{{ route('user_update') }}">
                                @csrf
                                {{--                        INPUT NOM--}}
                                <div class="form-group row">
                                    <label for="last_name"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                                    <div class="col-md-6">
                                        <input id="last_name" type="text"
                                               class="form-control @error('last_name') is-invalid @enderror"
                                               name="last_name" value="{{$user->last_name}}" required
                                               autocomplete="last_name"
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
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password"
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
                                               class="form-control" name="phone_nb"
                                               value="{{$user->phone_nb}}" required autocomplete="Numéro de téléphone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="team_name2"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Nom de l\'équipe') }}</label>
                                    <div class="col-md-6">
                                        <select id="team_name2" name="team_name" class="custom-select custom-select-md">
                                            <option selected>{{$user->team_name}}</option>
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
                                            Modifier mon profil
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <a class="excentersupprbutton" href="{{route('user_delete')}}">
                                <button type="alert" class="btn btn-danger">
                                    Supprimer mon compte
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
