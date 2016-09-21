(function($) {
    $('#visual ul').bxSlider({
        auto: false,
        controls: false
    });
    $('.banner ul').bxSlider({
        auto: false,
        controls: false
    });
    $('.bra-top ul').bxSlider({
        auto: false,
        controls: false
    });
    $(document).on('click', '#nav .gnb > li > a', function(e) {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
        e.preventDefault();
    });

    $(document).on('click', '#nav .nav-backdrop, #nav .btn-nav-close', function() {
        $('body').removeClass('nav-opened');
        $('#nav').addClass('collapsed');
    });

    $(document).on('click', '#header .btn-menu', function() {
        $('body').addClass('nav-opened');
        $('#nav').removeClass('collapsed');
    });
})(jQuery);
