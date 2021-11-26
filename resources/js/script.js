//$( document ).ready(function() {
$(function() {
    console.log("readydoc");
// actu wrapper
    $(".seemore").on("click",function() {
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
});
