$(function(){

    var visibleHeight = $(window).height();

    //Preenche com a img o height visivel da tela 
    $("#page-wrapper").css({'height': (visibleHeight)+'px'});
    $(window).resize(function(){'use strict', 
        $("#page-wrapper").css({'height': (visibleHeight)+'px'});
    });

});
