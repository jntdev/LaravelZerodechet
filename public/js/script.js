$(function() {
    $('#section_list_equipment').hide();
    //actu wrapper
    $(".seemore").on("click",function() {
            $(this).parent().find(".contenuactu").removeClass('visible');
            $(this).parent().parent().removeClass("biggeractusection");
            $(this).children('p').html("voir plus ...");
            $(this).children('.arrow').toggleClass("rotate");
            if($(this).children(".arrow").hasClass("rotate")){
                $(this).children('p').html("voir moins ...");
                $(this).parent().parent().addClass("biggeractusection");
                $(this).parent().find(".contenuactu").toggleClass('visible');
            }
        }
    );
    //datepicker la creation d'animation
    $( ".datepicker" ).datepicker();


    $("#has_equipment").on("click",function() {

        if($("#has_equipment").is(':checked')) {
            $('#section_list_equipment').show('slow');
        }else{
            $('#section_list_equipment').hide('slow');
        }
    })
});
