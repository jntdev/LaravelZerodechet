
<?php
    include('componant/header.php');
?>
    <div class="astucontent">
        <div class="introastuce">
            <p>Ici, c'est la zone <strong>bons plans</strong> !</p>
            <p>Rappels sur la démarche zéro déchet, carte des commerçants et producteurs permettant de limiter ses déchets dans la région, astuces zéro déchet pour la maison et ressources supplémentaires. Bref, de quoi se lancer dans l'aventure !</p>
            <p>Nous espérons compléter  ces rubriques au fur et à mesure du défi : n'hésitez pas à revenir y faire un tour.</p>
        </div>
        <div class="astusection primebackground " onclick="location.href='/demarchezerodechet';">
            <div class="astuces cinqr clickable"></div>
        </div>
        <div class="astusection secondbackground " onclick="location.href='/cartecommercants';">
            <div class="astuces commercants flexrow clickable">
                <div class="map "></div>
                <div class="titrecarte">
                    <h2>La carte des </br>commerçants z'héros</h2>
                </div>
            </div>
        </div>
        <div class="astusection thirdbackground " onclick="location.href='lamaison';">
            <div class="astuces maison clickable">
                <div class="bande ">
                    <h2>Des astuces pour toute la maison</h2>
                </div>
            </div>
        </div>
        <div class="astusection fourthbackground " onclick="location.href='produitsmenagers';">
            <div class="astuces menage clickable">
                <div class="bande ">
                    <h2>Produits ménagers</h2> 
                </div>
            </div>
        </div>
        <div class="astusection fifthbackground " onclick="location.href='biblio';">
            <div class="astuces plusloin clickable">
                <div class="bande ">
                    <h2>Pour aller plus loin</h2>
                </div>
            </div>
        </div>
    </div>
    <?php
        include("componant/footer.php");
    ?>
</body>
</html>