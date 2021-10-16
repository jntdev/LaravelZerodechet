
@include('/componant/header');
<div class="astusection secondbackground clickable backgroundwhite" onclick="location.href='cartecommercants.php';">
            <div class="astuces commercants border">
                <div class="map "></div>
                <div class="titrecarte">
                    <h2>La carte des </br>commerçants z'héros</h2>
                </div>
            </div>
        </div>
        <div class="titlecommercants">
            <h3>Le Zéro Déchet dans la région de Paimpol</h3>
        </div>
        
<div class="cartecontent">
    <p>Cette carte recense les commerçants qui proposent des produits 
    en vrac ou qui acceptent qu'on apporte ses contenants. Elle a 
    vocation à être enrichie, au fur et à mesure de vos découvertes !
</p>
</div>
<div class="carte">
<iframe width="100%"
height="80%" frameborder="0" allowfullscreen
src="https://framacarte.org/fr/map/zero-dechet-goelo_104682?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false">
</iframe>
<p>
    <a target="_blank" href="https://framacarte.org/fr/map/zero-dechet-goelo_104682">Voir en plein écran
</a>
</p>
</div>

<img class="poubelle center"src="../images/poubellelavie.png" alt="">

@include('/componant/footer');
</body>
</html>