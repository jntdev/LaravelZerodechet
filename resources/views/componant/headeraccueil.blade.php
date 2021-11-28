<!DOCTYPE html>
<html lang="fr">
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
<div class="header headeraccueil">
<!-- <button class="connexion clickable">Connexion / Inscription</button> -->
    <div class="logo ;">
        <img id="logo" class="clickable" src="images/logo.png" alt="logo" onclick="location.href='accueil'">
    </div>
    <div class="menu">
        <div class="maintitle">
            <H1>Osez Zéro Déchet !</H1>
        </div>
    </div>
</div>
