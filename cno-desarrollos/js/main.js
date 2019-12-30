function($){  
   var hth = $('.header-top-bar').height();
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > hth){  
            $('#sticky-header').addClass("sticky");
        }
        else{
            $('#sticky-header').removeClass("sticky");
        }
});