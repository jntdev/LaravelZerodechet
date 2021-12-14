<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../images/colibri.jpg" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Osez Zéro Déchet !</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8ff194f9b0.js"crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" defer></script>

</head>
<body>
<div class="header">
<!-- <button class="connexion clickable">Connexion / Inscription</button> -->
    <div class="logo " >
        <img id="logo" class="clickable" src="{{ asset('images/logo.png') }}" alt="logo" onclick="location.href='../accueil';">
    </div>
    <div class="menu relative">
    <input id="burger" type="checkbox" />
        <label id="burgerlabel"for="burger">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <nav>
          <ul><li class="back6"><a href="../accueil">Accueil</a></li>
            <li class="back1"><a href="/actualites">Actualités</a></li>
            <li class="back2"><a href="/ledefi">Le défi</a></li>
            <li class="back3"><a href="/astuces&ressources">Astuces & ressources</a></li>
            <li class="back4"><a href="/quisommesnous">Qui sommes-nous ?</a></li>
            <li class="back5"><a href="/contact">Contact</a></li>
          </ul>
        </nav>
        <div id="nav" class="nav">
            <ul class="navlinks nav__list">
                <li class="category relative nav__listitem"><a class="underline white" id="navbuton" href="../accueil">Accueil</a>
                </li>
                <li class="category relative nav__listitem"><a class="underline white"id="navbuton"  href="../actualites">Actualit&eacute;s</a>
                </li>
                <li class="category relative nav__listitem"><a class="underline white"id="navbuton" href="../ledefi">Le d&eacute;fi</a>
                </li>
                <li class="category relative nav__listitem"><a class="underline white" id="navbuton" href="../astuces&ressources">Astuces &amp; ressources</a>
                    <ul class="nav__listitemdrop">
                        <li class="back1"><a class="subcat drop1" id="navbuton2" href="../demarchezerodechet">La D&eacute;marche Z&eacute;ro D&eacute;chet</a>
                        </li>
                        <li class="back2"><a class="subcat drop1" id="navbuton2" href="../cartecommercants">La carte des commer&#231;ants Z'h&eacute;ros</a>
                        </li>
                        <li class="back3"><a class="subcat drop1" id="navbuton2"href="../lamaison">Des astuces pour toute la maison</a>
                        </li>
                        <li class="back4"><a class="subcat drop1" id="navbuton2" href="../produitsmenagers">Produits m&eacute;nagers</a>
                        </li>
                        <li class="back5"><a class="subcat drop1" id="navbuton2" href="../pourallerplusloins">Pour aller plus loin</a>
                        </li>
                    </ul>
                </li>
                <li class="category relative nav__listitem"><a class="underline white" id="navbuton"href="../quisommesnous">Qui sommes-nous ?</a>
                </li>
                <li class="category relative nav__listitem"><a class="underline white" id="navbuton" href="../contact">Contact</a>
                </li>
            </ul>
        </div>
        <div class="title">
            <h1>{{$title ?? ''}}</h1>

            <div class="logins">
                @guest
                @if (Route::has('login'))
                    <a class="" hidden href="{{ route('login') }}">Connexion</a>
                @endif
{{--                @if (Route::has('register'))--}}
{{--                    <a class="" href="{{ route('register') }}">Inscription</a>--}}
{{--                @endif--}}
                @else
                <div class="flexrow logs">
                <p>Bonjour {{ Auth::user()->first_name }} !  &nbsp;||&nbsp;  </p>
                    <div class="" >
                        <a class="" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            Déconnexion
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>

                @endguest

            </div>
        </div>
        <div class="maintitlealter">
            <H1>Osez Zéro Déchet !</H1>
        </div>
    </div>
</div>
