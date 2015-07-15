$(document).ready(function(){

    $(window).scroll(function(){
        var scroll = $(this).scrollTop();

        if(scroll > 70){
            $('.navbar-default').css('background-color', 'rgba(60,60,60,0.9)')
        }else if(scroll <= 70){
            $('.navbar-default').css('background-color', 'rgba(0,0,0,0)')
        }
    });
});