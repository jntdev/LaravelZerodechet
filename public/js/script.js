$( document ).ready(function() {

// actu wrapper

  $(".seemore").click(function() {
      $(this).parent().find(".contenuactu").removeClass('visible');
      $(this).parent().parent().removeClass("biggeractusection");
      $(this).children('p').html("voir plus ...");
      $(this).children('.arrow').toggleClass("rotate");  
        if($(this).children(".arrow").hasClass("rotate")){
        $(this).children('p').html("voir moins ...");
        $(this).parent().parent().addClass("biggeractusection");
        $(this).parent().find(".contenuactu").toggleClass('visible');
        };  
    }
  );

//titre de page 
  var nom = window.location.pathname;
  console.log(nom);
  if(nom == "/actualites"){
    $('.title').html("<h2>Actualités</h2>");
  };
  if(nom == "/lamaison"){
    $('.title').html("<h2>Des astuces pour toute la maison</h2>");
  };
  if(nom == "/ledefi"){
    $('.title').html("<h2>Le défi</h2>");
  };
  if(nom == "/astuces&ressources"){
    $('.title').html("<h2>Astuces & ressources</h2>");
  };
  if(nom == "/biblio"){
    $('.title').html("<h2>Pour aller plus loin ...</h2>");
  };
  if(nom == "/bureau.php"){
    $('.title').html("<h2>Bureau</h2>");
  };
  if(nom == "/cartecommercants"){
    $('.title').html("<h2>La carte</h2>");
  };
  if(nom == "/contact"){
    $('.title').html("<h2>Contact</h2>");
  };
  if(nom == "/cuisine"){
    $('.title').html("<h2>Cuisine</h2>");
  };
  if(nom == "/enfants"){
    $('.title').html("<h2>Enfants</h2>");
  };
  if(nom == "/produitsmenagers"){
    $('.title').html("<h2>Produits ménagers</h2>");
  };
  if(nom == "/quisommesnous"){
    $('.title').html("<h2>Qui sommes-nous ?</h2>");
  };
  if(nom == "/demarchezerodechet"){
    $('.title').html("<h2>La démarche zéro déchet</h2>");
  };
  if(nom == "lamaison"){
    $('.title').html("<h2>La maison zéro déchet</h2>");
  };
  if(nom == "/salledebain"){
    $('.title').html("<h2>Salle de bain</h2>");
  };

//popup connexion/inscription//

  $('.connexion').click(function(){
    console.log("toto");
    $('.inscription_container').css("transform","scale(1)");
    $('body').css("background-color","rgba(168, 168, 168, 0.459)");
   
  });

  $('.close').click(function(){
    $('.inscription_container').css("transform","scale(0)");
    $('body').css("background-color","white");
  });

});