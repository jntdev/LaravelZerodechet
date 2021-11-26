@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-info">
                    <div class="card-body home_text">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Vous êtes connecté !
                        <a href="/"><button class="userbutton"> Merci </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
