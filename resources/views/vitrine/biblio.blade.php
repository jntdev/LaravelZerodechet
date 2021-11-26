@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <a href="{{route('event_list')}}"><button id="tableaudebord">Tableau de bord</button></a>
    @endif
    <div class="astusection">
        <div class="astuces plusloin">
            <div class="bande">

                <h2>Pour aller plus loin</h2>
            </div>
        </div>
    </div>
    <div class="bibliocontent pagesetup">

        <h3><strong>Bibliographie</strong></h3>
        <div class="fifthbackground">
            <p>Bien pratique, cet ouvrage passe en revue les différents déchets que nous produisons – en les
                classant suivant les pièces de la maison –
                et propose, pour chacun d'entre eux, des alternatives :
                </br>
                <strong>Laëtitia Crnkovic</strong>, <em>Faites l'autopsie de votre poubelle</em>, Larousse, 2020.
            </p>


            <p>Le classique, incontournable du Zéro Déchet :</br><strong>Jérémie Pichon et Bénédicte Moret</strong>, <em>Famille - presque –
                    zéro déchet. Ze guide</em>, Thierry Souccar Editions, 2016.
            </p>
            <p>
                … et sa version enfants : </br><strong>Jérémie Pichon et
                    Bénédicte Moret</strong>, <em>Les enfants - presque - zéro déchet.
                    Ze mission</em>, Thierry Souccar Editions, 2016.
            </p>


            <p>Encore pour les enfants (et pourquoi pas les plus grands !) :
                </br><strong>Karine Balzeau</strong>, <em>Défis zéro déchet. 32 défis à relever
                    pour protéger la planète !</em>, Editions Rustica, coll.
                Rusti'kid, 2019.
            </p>
        </div>

        <h3><strong>Sitographie</strong></h3>
        <div class="fifthbackground2">
            <p>
                <a target="_blank" href="https://www.ouest-france.fr/reflexion/editorial/editorial-en-finir-avec-le-tout-jetable-7194218">L'édito</a> de <strong>Philippe Boissonnat</strong> « En finir avec le tout jetable » dans
                le <strong>Ouest-France</strong> du 20/03/2021 donne matière à réfléchir...
            </p>
            </br>
            <p><a target="_blank" href="https://cotewaste.fr/"><strong>Côte waste</strong></a>, une asso du 29 qui promeut le zéro déchet tout au bout là-bas (bise aux Finistériens !) : elle dispose notamment d'une chaîne Youtube qui regorge de petites vidéos très utiles pour réaliser des gestes/recettes zéro déchet simples, présentés par des personnes qui les pratiquent au quotidien. Claire Cariou, la fondatrice, a aussi fait un Tro Breizh des solutions zéro déchet dans les départements bretons : d'avril à juin 2021, elle est partie à la rencontre des acteurs professionnels et publics qui arrivent à générer moins de déchets.
            </p>
            </br>
            <p><a target="_blank" href="https://www.idelux.be/fr/je-me-lance-dans-le-zero-dechet-avec-le-kit-zd.html?IDC=2586&IDD=54484">Fiches pratiques et tutos</a> réalisés par les <strong>intercommunales wallonnes de gestion des déchets</strong> pour vous aider à entamer une démarche zéro déchet.
            </p>
            </br>
            <p>L'association paimpolaise <a target="_blank" href="http://jaccueillelanature.fr/"><strong>J'accueille la nature</strong></a> mène des actions visant à développer la biodiversité en favorisant l’accueil des petits animaux du sol, de l’eau, et de l’air dans les jardins et balcons privés et publics, sans usage de pesticides, herbicides ou engrais chimiques. Marie-Noëlle et Eric sont également à l'origine de l'initiative <strong>« Je sais faire »</strong> qui propose un partage de savoirs et savoir-faire utiles pour la réalisation des actes courants de la vie quotidienne avec efficience, autonomie, économie, ingéniosité et confiance en soi. Bref, un aspect fondamental du défi, pour lequel ils vont animer des ateliers utiles et sympas !
            </p>
            </br>

            <p>Les précurseurs dans les Côtes-d'Armor, qui nous ont donné l'inspiration et un gros coup de main ! (en plus, leur nom est drôle...). <a href="https://conquetedelwaste.wordpress.com/"><strong>La Conquête de l'waste</strong></a> a lancé un défi zéro déchet dans la région de St-Brieuc au premier semestre 2021.
            </p>
            </br>
            <p>Ce <a target="_blank" href="https://colibris-universite.org/mooc-zerodechet/?I1Bienvenue"><strong>MOOC</strong> proposé par <strong>l'Université des Colibris</strong></a> a été d'une aide précieuse, voire un déclic pour certains d'entre nous... C'est une mine d'informations sur la démarche zéro déchets : intérêt, chiffres, astuces, témoignages...
            </p>
            </br>


            <p>Toujours pour réfléchir, le <a target="_blank" href="https://actu.fr/bretagne/paimpol_22162/habitat-tiny-house-une-mini-maison-aller-lessentiel-2_19938693.html">portrait</a> de <strong>Dominique Marc</strong>, qui a décidé de vivre en tiny house dans La Presse d'Armor du 4 janvier 2019.
            </p>
            </br>
            <p>Le site du <a target="_blank" href="https://www.roubaixzerodechet.fr/"><strong>Zéro Déchet à Roubaix</strong></a> avec notamment des recettes, des astuces, une aide pour débuter...
            </p>
            </br>

            <p><a target="_blank" href="https://toitsalternatifs.fr/"><strong>Toits alternatifs</strong></a> : des recettes, des portraits, des liens et une brochure « 30 objets du quotidien en version Zéro Déchet »
            </p>
            </br>
            <p><strong>Il existe de nombreux guides du zéro déchet en ligne. Parmi ceux qui nous ont servi à réaliser ce site : </strong>
            </p>
            <p>Le <a target="_blank" href="https://www.apc-paris.com/publication/devenez-heros-zero-dechet">guide</a> du défi zéro déchet parisien, réalisé par <strong>L'agence parisienne du climat</strong> (décembre 2020).

            </p>
        </div>


    </div>


    <img class="poubelle center"src="../images/poubellelavie.png" alt="">

@endsection
