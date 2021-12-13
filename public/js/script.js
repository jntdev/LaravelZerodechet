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

    $('.textarea_description').keypress(function(e) {
        var tval = $('.textarea_description').val(),
            tlength = tval.length,
            set = 300,
            remain = parseInt(set - tlength);
        $('p').text(remain);
        if (remain <= 0 && e.which !== 0 && e.charCode !== 0) {
            $('.textarea_description').val((tval).substring(0, tlength - 1));
            return false;
        }
    })
    $('.textarea_listmateriel').keypress(function(e) {
        var tval = $('.textarea_listmateriel').val(),
            tlength = tval.length,
            set = 130,
            remain = parseInt(set - tlength);
        $('p').text(remain);
        if (remain <= 0 && e.which !== 0 && e.charCode !== 0) {
            $('.textarea_listmateriel').val((tval).substring(0, tlength - 1));
            return false;
        }
    })



});
$('.canLoad').on('click', function() {
    $('.canLoad').html("<i class=\"fa fa-circle-o-notch fa-spin\"></i>Envoi...");

});
