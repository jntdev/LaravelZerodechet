@extends('layouts.app')
@section('content')
<div id ="accueilsetup"class="accueilsetup">
    <div id="drawmenu"class="drawmenu">
        <div id="actudraw"class="actudraw clickable drawcolumn" onclick="location.href='actualites';">
            <h2>Actualités</h2>
            <img id="logodrawresponsiv" class="logonav" src="images/alaune.png" alt="">
        </div>
        <div class="ledefidraw_button">
            <div class="defidraw clickable drawcolumn " onclick="location.href='ledefi';">
                <h2>Le Défi</h2>
                <img id="logodrawresponsiv"class="logonav logodefinav" src="images/ledefi.png" alt="">
            </div>
            <!-- <a target="_blank" href="docs/inscription.pdf"><button class="indexinscription clickable">Relevez le défi !</button></a> -->
        </div>
        <div id="astucesdraw"class="astucesdraw clickable drawcolumn " onclick="location.href='/astuces&ressources';">
            <h2>Astuces & Ressources</h2>
            <img id="logodrawresponsiv" class= "logonav" src="images/astuceslogo.png" alt="">
        </div>
        <div class="quisommesnousdraw clickable drawcolumn" onclick="location.href='quisommesnous';">
            <h2>Qui sommes-nous ?</h2>
            <img id="logodrawresponsiv" class="logonav"src="images/quisommesnous.png" alt="">
        </div>
        <div id="contactdraw"class="contactdraw clickable drawcolumn" onclick="location.href='contact';">
            <H2>Contact</H2>
            <img id="logodrawresponsiv" class="logonav" src="images/contact.png" alt="">
        </div>
    </div>
    <div class="slogan">
        <div id="slogancontent"class="slogancontent">
            <h2>Le défi zéro déchet du Goëlo</h2>
            <p class="secondfontfamilly black">6 mois pour prendre conscience, réduire et s'amuser </p>
            <p class="texteprincipal firstfontfamilly white">Ils sont 50 foyers au départ, le 17 octobre 2021... et se lancent dans un défi de poids, en équipes : réduire de 50% leurs déchets ! </br>Cette mission n'est pas impossible ! Ils feront des visites, participeront à des ateliers ludiques et pratiques proposés par des acteurs locaux engagés et partageront les bons plans zéro déchet !</p>
            <p class="towns firstfontfamilly white"> Paimpol - Plouézec - Ploubazlanec - Bréhat - Yvias - Kerfot - Lanleff - Lanloup - Pléhédel - Plourivo</p>
        </div>
    </div>
    </div>
    <div class="container-wrapper-genially" style="position: relative; min-height: 400px; max-width: 100%;"><video class="loader-genially" autoplay="autoplay" loop="loop" playsinline="playsInline" muted="muted" style="position: absolute;top: 45%;left: 50%;transform: translate(-50%, -50%);width: 80px;height: 80px;margin-bottom: 10%"><source src="https://static.genial.ly/resources/panel-loader-low.mp4" type="video/mp4" />Your browser does not support the video tag.</video><div id="60e599e5b069510dcc796207" class="genially-embed" style="margin: 0px auto; position: relative; height: auto; width: 100%;"></div></div><script>(function (d) { var js, id = "genially-embed-js", ref = d.getElementsByTagName("script")[0]; if (d.getElementById(id)) { return; } js = d.createElement("script"); js.id = id; js.async = true; js.src = "https://view.genial.ly/static/embed/embed.js"; ref.parentNode.insertBefore(js, ref); }(document));</script>
</div>
</div>  
@endsection