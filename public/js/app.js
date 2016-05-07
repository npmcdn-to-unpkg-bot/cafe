$(function() {
    $(window).scroll(function(){
        if ($(this).scrollTop() > 400) {
            $('.scroll-btn').fadeIn();
        } else {
            $('.scroll-btn').fadeOut();
        }
    });

    $('.scroll-btn').click(function(){
        $('html, body').animate({scrollTop : 0}, 800);
        return false;
    });

    window.setTimeout(function() { $(".alert").alert('close'); }, 5000);
});


