@extends('layouts.app')
@section('content')
    <section class="index_vue_page">
        <aside class="index_vue_pannel">
            <div class="button_controller">
                <a href="{{route('event_list')}}"><button class="userbutton">Tableau de bord</button></a>
                <a href="{{route('registered')}}"><button class="userbutton">Vos inscriptions</button></a>
                @if (Checker::isAdmin() || Checker::isAnim())
                    <a href="{{route('profile')}}"><button class="userbutton">Votre profile</button></a>
                    <a href="{{route('manage')}}"><button class="animbutton">Gerez vos animations</button></a>
                @endif
            </div>
            <div class="calendar"></div>
        </aside>
    <div class="container text-center backoffice_borderleft">
        <h2>renseignez les champs</h2>

        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="card border-info">
                    <div class="card-body form_event_relativ">
                        <form method="POST" action="{{route('event_store')}}" enctype="multipart/form-data">
                            @csrf
                            <input id="event_id" type="hidden" name="event_id" value="{{$event->id ?? ''}}">
                            <input id="user_id" type="hidden" name="user_id" value="{{$event->user_id ?? Auth::user()->id}}">
                            {{--                        INPUT TITLE--}}
                            <div class="form-group row">
                                <label for="title"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Titre de l\'animation') }}</label>
                                <div class="col-md-6">
                                    <input id="title" type="text"
                                           class="form-control @error('Titre de l\'animation') is-invalid @enderror"
                                           name="title" value="{{$event->title ?? ''}}" required autocomplete="title"
                                           autofocus placeholder="Titre de l'animation">

                                    @error('Titre de l\'animation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{--                        INPUT DATE--}}
                            <div id="event_date_picker">
                            <div class="form-group row">
                                <label for="date"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                                <div class="col-md-6">
                                    <input id="date" type="text"
                                           class=" datepicker form-control @error('Date') is-invalid @enderror"
                                           name="date" value="{{$event->date??''}}" required
                                           autocomplete="date" autofocus placeholder="Selectionnez une date">

                                    @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            </div>
                            {{--                            INPUT TIME--}}
                            <div class="form-group row">
                                <label for="time"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Heure') }}</label>

                                <div class="col-md-6">
                                    <input id="time" type="text"
                                           class="form-control @error('Heure') is-invalid @enderror" name="time"
                                           value="{{$event->time??''}}" required autocomplete="Heure" placeholder="format HH/MN">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{--                        INPUT CITY--}}
                            <div class="form-group row">
                                <label for="city"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

                                <div class="col-md-6">
                                    <input id="city" type="text"
                                           class="form-control @error('Ville') is-invalid @enderror" name="city"
                                           required autocomplete="city" placeholder="Ville de l'animation" value="{{$event->city ?? ''}}">

                                    @error('Ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- INPUT ADDRESS--}}
                            <div class="form-group row">
                                <label for="address"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                           class="form-control @error('adresse') is-invalid @enderror" name="address"
                                           required autocomplete="address" placeholder="Adresse de l'animation"
                                           value="{{$event->address ?? ''}}">

                                    @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{--                        INPUT DESCRIPTION--}}
                            <div class="form-group row">
                                <label for="description"
                                       class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <textarea id="description"
                                           class="form-control @error('description') is-invalid @enderror" name="description" rows="10"
                                              required autocomplete="Description" placeholder="Description de l'animation">{{$event->description ?? ''}}</textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <section class="radio_event_create">
                    <span class="checkbox_event_create">
                        <label for="has_equipment">Materiel nécessaire</label>
                        <input type="hidden" name="has_equipment" value="0">

                        <input class="checkbox" id="has_equipment" type="checkbox" name="has_equipment"  value="1" @if($event->has_equipment){{ $event->has_equipment || old('has_equipment', 0) === 1 ? 'checked':''}}@endif>
                    </span>
                                    <span class="checkbox_event_create">
                        <label for="child_authorized">Enfants acceptés</label>
                                         <input type="hidden" name="child_authorized" value="0">
                        <input class="checkbox" id="child_authorized" type="checkbox" name="child_authorized"  value="1" @if($event->child_authorized){{ $event->child_authorized || old('child_authorized', 0) === 1 ? 'checked':'' }}@endif>
                    </span>
                                    <span class="checkbox_event_create">
                        <label for="has_toilets">Toilettes disponibles</label>
                                        <input type="hidden" name="has_toilets" value="0">
                        <input class="checkbox" id="has_toilets" type="checkbox" name="has_toilets"  value="1" @if($event->has_toilets){{ $event->has_toilets || old('has_toilets', 0) === 1 ? 'checked':''}}@endif>
                    </span>

                                </section>
                            </div>
                            {{--                            INPUT LIST_EQUIPMENT--}}
                            <div class="form-group row" id="input_list_equipment">
                                <label for="list_equipment"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Liste du materiel nécessaire') }}</label>

                                <div class="col-md-6">
                                    <textarea  id="list_equipment" type="textarea" rows="4"
                                           class="form-control" name="list_equipment"
                                               placeholder="Indiquez la liste de materiel que devront apporter les participants ">{{$event->list_equipment ?? ''}}</textarea>

                                    @error('list_equipment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
{{--                                                        NB_MAX_USER--}}
                            <div class="form-group row">
                                <label for="nb_max_user"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Nombre maximum de participant') }}</label>

                                <div class="col-md-6">
                                    <input id="nb_max_user" type="number"
                                           class="form-control @error('nb_max_user') is-invalid @enderror" name="nb_max_user"
                                           value="{{$event->nb_max_user ?? ''}}"required autocomplete="Nombre maximum de participant">

                                    @error('nb_max_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
{{--                                                        PICTURE--}}
                            <div class="form-group row">
                                <label for="event_picture"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Importez une image d\'illustration pour votre animation') }}</label>

                                <div class="col-md-6">
                                    <input id="event_picture" type="file"
                                           class="form_event_picture" name="event_picture"
                                    value="{{$event->event_picture ?? ''}}">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-7 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            <?= (!empty($edit)) ? 'Modifier l\'animation' : 'Enregistrer l\'animation' ?>
                                        </button>
                                </div>
                            </div>
                        </form>
                        @if (!empty($edit))
                        <a href="{{route('event_delete', ['id' => $event->id])}}">
                            <button type="alert" class="btn btn-danger">
                                Supprimer l'animation
                            </button>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
