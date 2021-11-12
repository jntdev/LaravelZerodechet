@extends('layouts.app')

@section('content')
    <div class="astusection mt100">
        <div class="astuces border cinqr"></div>
    </div>
    <div class="rappelcontent">
        <div class="rappeltextpart1">
            <h3>Zéro Déchet, Késako ?</h3>
            <p id="soustitre" class="soustitre">La démarche Zéro Déchet s'appuie sur la
                philosophie des <span>5 R</span> : refuser, réduire, réemployer, recycler,
                redonner à la terre.
            </p>
        </div>
        <div class="genially2">
            <div>
                <iframe frameborder="0" src="https://view.genial.ly/60e594713bc6cc0dbef1a37b">
                </iframe>
            </div>
        </div>
        <div class="list5r style5r">
            <div class="bluegrad1 flexrow alignitems">
                <img class="icon_produits" src="../images/refuser.png" alt="">
                <p><span>Refuser</span> tout ce dont on n'a pas besoin (emballages superflus,
                    prospectus et publicités, surdose de nourriture proposée
                    dans la restauration, échantillon de parfum proposé
                    dans un magasin de beauté...).
                </p>
            </div>
            <div class="bluegrad1 flexrow alignitems">
                <img class="icon_produits" src="../images/reduire.png" alt="">
                <p><span>Réduire</span> sa consommation, vivre avec moins mais mieux,
                    ne pas accumuler des objets dont on ne se sert pas.
                </p>

            </div>
            <div class="bluegrad1 flexrow alignitems">
                <img class="icon_produits" src="../images/reutiliser.png" alt="">
                <p><span>Réutiliser</span> en prêtant, réparant, troquant, en pratiquant l'upcycling... et en
                    privilégiant le durable au jetable.
                </p>
            </div>
            <div class="bluegrad1 flexrow alignitems">
                <img class="icon_produits" src="../images/recycler.png" alt="">
                <p><span>Recycler</span> les déchets tout de même produits.
                </p>

            </div>
            <div class="bluegrad1 flexrow alignitems">
                <img class="icon_produits" src="../images/composter.png" alt="">
                <p><span>Redonner</span> la terre en compostant, par exemple.
                </p>
            </div>
        </div>
        <div class="list3pts style5r ">
            <p id="secondfont">Le recyclage n'est donc qu'en 4<sup>e</sup> position... Pourquoi ?</p>
            <div class="listcontent">
                <ul>
                    <li>même dits « recyclables », les déchets ne représentent,
                        au mieux, que 24 % des plastiques collectés.
                        D'ailleurs, une bouteille plastique dite « recyclée »
                        ne contient que 15 à 20 % de plastique recyclé.
                        Le plastique n'est donc pas si fantastique... ;
                    </li>
                    <li>le plastique et le carton ne sont pas recyclables à
                        l'infini : c'est 5 fois maximum pour le plastique et pas
                        plus de 2 à 5 fois pour le papier ;
                    </li>
                    <li>verre et aluminium réclament beaucoup d'énergie pour être recyclés.</li>
                </ul>
            </div>
        </div>


        <div class="lastpartrappel primebackground">
            <p>Vous trouverez <a
                    href="https://colibris-universite.org/mooc-zerodechet/?Ii62RecapitulonsParTypeDeDechets&course=MoocZeroDechet&module=Ii6Recycler">ici</a>
                une infographie qui présente le recyclage des
                différents déchets que nous produisons.</p>
            <p>La majeure partie de ce qui est collecté reste donc incinérée (32%)
                ou mise en décharge (26%) et seuls 26 % sont recyclés.
                Les 16 % restants sont compostés.
            </p>
            <p>De plus, en amont, la fabrication, le transport et la vente de chaque objet
                ou emballage demande de nombreuses ressources (matières premières, énergie,
                eau, etc.).
            </p>
            <p>Par exemple, une brosse à dents, c'est 50g de déchets dans la
                poubelle mais 1,5 kg de déchets cachés (extraction du pétrole,
                transformation en plastique, moulage, transport, emballage,
                vente dans le magasin...). Le déchet dans la poubelle n'est que
                la partie visible de l'iceberg. C'est ce qu'on appelle le <span>«
                sac à dos écologique »</span>. Faire doubler la quantité de sacs de recyclage pour
                faire baisser l'autre, c'est déplacer le problème ailleurs : le transport,
                le processus de transformation du produit, l'énergie...
            </p>
            <p>
                Ainsi, le célèbre adage <span>« le meilleur déchet est celui qu'on ne
                produit pas »</span> semble plus que jamais d'actualité car, pour
                ne pas jeter de déchets à la poubelle, le plus simple c'est encore
                d'arrêter d'en acheter !
            </p>
        </div>
    </div>
    <iframe class="youtube center" src="https://www.youtube.com/embed/SJq7i_3UODM" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
    </iframe>
    <img class="poubelle center" src="../images/poubellelavie.png" alt="">
@endsection
