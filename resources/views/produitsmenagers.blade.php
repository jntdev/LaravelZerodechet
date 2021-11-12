@extends('layouts.app')
@section('content')
<div class="astusection">
    <div class="astuces menage">
        <div class="bande">
            <h2>Produits ménagers</h2> 
        </div>
    </div>
</div>

<main class="produitcontent">
        <section class="topofpage_produits">
            <p class="intro">
            Il est possible de réaliser une grande quantité de produits 
            ménagers avec peu de produits de base. Cela réduit 
            les emballages et évite les composants toxiques.
            </p>

            <div class="atelier_en_lien">
                
                    <h3 class="transform">LES ATELIERS DU DEFI </br>EN LIEN AVEC LES PRODUITS MÉNAGERS </h3>
                    <ul class="redarrow">
                        <li >Un atelier pour apprendre à faire ses produits ménagers.
                        </li>
                        <li >Un atelier pour apprendre à faire ses éponges.
                        </li>
                    </ul>
               
            </div>
        </section>
        <section class="midpage_produits">
            <h3>LE TAOUA... QUOI ?</h3>
            <div class="containertawashi">
                <div class="texttawashi">
                    <p>Le tawashi ! C'est une éponge japonaise faite de tissus récupérés. 
                        Pratique pour nettoyer toutes les surfaces.
                    </p>
                    <p>En attendant l'atelier, voici <a target="_blank" href="https://www.aufeminin.com/deco-pro/eponge-tawashi-s4009554.html">un tuto</a> permettant de le faire avec des 
                        pinces à linge et <a target="_blank" href="https://www.sowhat-magazine.fr/diy-fabriquer-un-tawashi-chaussette/">un autre</a> avec du carton ou une planche de bois et des clous : 
                    </p>
                    <p>
                    De même, bannissez l'essuie-tout jetable au profit des torchons et 
                    des « débarbouillettes » cousues maison !
                    </p>
                </div>
                <div class="tawashidraw">
                    <img src="../images/tawashi.png" alt="">
                </div>
            </div>
        </section>
        <section class="bottompage_produits">
            <div class="basiques">
                <h3>QUELQUES BASIQUES</h3>
                <p>Bicarbonate de soude, savon noir, vinaigre blanc, savon de 
                    Marseille, percarbonate de soude, soude en cristaux et 
                    acide citrique. Avec ces ingrédients dans votre droguerie, 
                    vous pouvez réaliser tous vos produits ménagers. 
                    Une partie d'entre eux se trouve en vrac. Et vous pouvez leur 
                    ajouter des gouttes d'huile essentielle. A vos recettes !
                </p>
            </div>
             <div class="greengrad1 flexrow alignitems billets">
                    <img class="icon_produits" src="../images/decrassechiotte.png" alt="">
                    <p>Le «<a target="_blank" href="https://www.famillezerodechet.com/archives/2015/09/22/32665104.html ">décrasse chiotte</a>» de la famille zéro déchet 	

                    ou le «<a target="_blank" href="https://www.famillezerodechet.com/archives/2015/05/20/32087081.html">débouche ton évier toi même</a>» </br> Réglez vos comptes avec les tuyaux... tout en restant écolo !</p>
            </div>
            <div class="greengrad2 flexrow alignitems billets">
                    <div>
                        <p>
                        L'incontournable vinaigre blanc sert à nettoyer et désinfecter toute la maison
                        </p>
                        <ul>
                            <li>Sols, cuisine et salle de bains : mélanger d'1l d'eau et ½ litre 
                                de 	vinaigre blanc. Vous pouvez laisser mariner des peaux 
                                d'agrumes ou des branches de menthe dans le flacon 
                                une dizaine de jours pour obtenir une odeur plus agréable.
                            </li>
                            <li>Vitres : ¾ litres d'eau + ¼ litre de vinaigre blanc
                            </li>
                        </ul>
                    </div>
                    <img class="icon_produits"src="../images/vinaigreblanc.png" alt="">
            </div>
            <div class="greengrad3 flexrow alignitems billets">
            <img class="icon_produits" src="../images/tablettevaisselle.png" alt="">

                    <p>

                Elle est belle, elle est 	propre, elle est écolo ma vaisselle ! 	</br></br>
                Un Français consomme en moyenne 10 kg de produit pour le lave-vaisselle par an. </br>Faites vos propres <a href="https://www.youtube.com/watch?v=4jUtTXLvEWQ">tablettes</a>, sans danger pour la nature ni pour vous-même !

                </p>
            </div>
            <div class="greengrad1b flexrow alignitems billets">
                   <p>
                   <a target="_blank" href="https://www.facebook.com/brutnatureFR/videos/1583717881774611/">Lessive liquide</a>
                    , une recette testée et approuvée. </br></br>
                    C'est vraiment pas compliqué, sans produits nocifs, ça réduit les emballages et... ça lave ! </br>Que demander de mieux ? Une recette en cinq ingrédients testée et approuvée !
                   </p>
                   <img class="icon_produits" src="../images/lessive.png" alt="">

            </div>
            <div class="greengrad2b flexrow alignitems billets">
                   <img class="icon_produits" src="../images/savon.png" alt="">
                   <p>
                   <a target="_blank" href="https://www.youtube.com/watch?v=oY__9Ibvq3w">Savon détachant</a>
                   et encore moult moult recettes <a href="https://lesecolohumanistes.fr/lessive-maison/">ici</a>
                   ou encore <a target="_blank" href="https://fr.calameo.com/read/004577338865f9acf06b3?page=1">là</a>  
            </br>pour briquer, blanchir, détartrer, récurer, rincer... mieux que 	Mister Propre !
                </p>
            </div>
        </section>
        <div class="encart connaissezvous">

        Vous connaissez et appliquez des trucs et astuces qui ne 
        sont pas sur cette page ? N’hésitez pas à les 
        partager et/ou envoyez-nous un mail à <a target="_blank" href="mailto:contact@osezzerodechet.bzh">contact@osezzerodechet.bzh</a> 
        </div>
</main>


<img class="poubelle center"src="../images/poubellelavie.png" alt="">

@endsection