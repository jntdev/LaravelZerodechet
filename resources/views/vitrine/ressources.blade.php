@extends('layouts.app')
@section('content')
    @if (Auth::check())
        <a href="{{route('event_list')}}"><button id="tableaudebord">Tableau de bord</button></a>
    @endif
    <div class="astucontent">
        <div class="astusection mt100">
            <div class="astuces maison">
                <div class="bande">
                    <h2>Des astuces pour toute la maison</h2>
                </div>
            </div>
        </div>
        <!-- <img id="workinprogress" src="../images/workinprogress.png" alt="section en travaux"> -->


        <div class="astusection primebackground" onclick="location.href='lacuisine';">
            <div class="astuces cuisine clickable">
                <div class="bande ">
                    <h2>La cuisine</h2>
                </div>
            </div>
        </div>

        <div class="astusection secondbackground" onclick="location.href='lasalledebain';">
            <div class="astuces salledebain clickable">
                <div class="bande ">
                    <h2>La salle de bain</h2>
                </div>
            </div>
        </div>

        <div class="astusection thirdbackground" onclick="location.href='lebureau';">
            <div class="astuces bureau clickable">
                <div class=" bande ">
                    <h2>Le bureau</h2>
                </div>
            </div>
        </div>

        <div class="astusection fourthbackground" onclick="location.href='lesenfants';">
            <div class="astuces chambreenfant clickable">
                <div class="bande ">
                    <h2>Les enfants</h2>
                </div>
            </div>
        </div>
    </div>

@endsection
