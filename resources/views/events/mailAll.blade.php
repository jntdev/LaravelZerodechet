@extends('layouts.app')
@section('content')
    <section class="index_vue_page">
        <aside class="index_vue_panel">
            <div class="button_controller">
                <a href="{{route('profile')}}"><button class="userbutton">Mon profil</button></a>
                <a href="{{route('registered')}}"><button class="userbutton">Vos inscriptions</button></a>
                @if (Checker::isAdmin() || Checker::isAnim())
                    <a href="{{route('event_create')}}"><button class="animbutton">Créez une animation</button></a>
                    <a href="{{route('manage')}}"><button class="animbutton">Gerez vos animations</button></a>
                @endif
                @if (Checker::isAdmin())
                    <a href="{{route('all_user')}}"><button class="adminbutton">Tous les participants</button></a>
                @endif
            </div>
            <div class="calendar"></div>
        </aside>
        <div class="container text-center backoffice_borderleft">
            <h2>Renseignez les champs</h2>

            <div class="row justify-content-center ">
                <div class="col-md-8">
                    <div class="card border-info">
                        <div class="card-body form_event_relativ">
                            <form method="POST" action="{{route('mailToAllSent')}}" enctype="multipart/form-data">
                                @csrf
                                <input id="event_id" type="hidden" name="event_id" value="{{$event->id ?? ''}}">
                                <input id="user_id" type="hidden" name="user_id" value="{{$event->user_id ?? Auth::user()->id}}">
                                {{--                        INPUT TITLE--}}
                                <div class="form-group col">
                                    <div class="col-md-12">
                                        <input id="title_mailtoAll" type="text"
                                               class="form-control @error('Sujet du mail') is-invalid @enderror"
                                               name="title_mailtoAll" required autocomplete="title_mailtoAll"
                                               autofocus placeholder="Sujet du mail">

                                        @error('Sujet du mail')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                {{--                        INPUT mailtoAll--}}
                                <div class="form-group col">
                                    <div class="col-md-12">
                                    <textarea id="content_of_mail"
                                              class="text_area form-control @error('content_of_mail') is-invalid @enderror" name="content_of_mail" rows="10"
                                              required autocomplete="content_of_mail" placeholder="Ecrivez votre message">

                                    </textarea>

                                        @error('content_of_mail')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-0">
                                    <div class="col-md-7 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Envoyez à tous
                                            </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{--@section('textarea_scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#content_of_mail' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection--}}
