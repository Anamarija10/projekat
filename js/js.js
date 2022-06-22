$(document).ready(function(){
    $('#menu').click(function(){
        $('header').toggleClass('toggle');
    });
    $(window).on('scroll load',function(){
        $('header').removeClass('toggle');
    })


});