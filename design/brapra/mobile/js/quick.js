$(window).on('scroll', function() {
    if ($(this).scrollTop() >= 855) {
        $('#quick-top').stop().animate({
            top: $(this).scrollTop() + 200
        }, 'slow');
    } else {
        $('#quick-top').stop().animate({
            top: 855
        }, 'slow');
    }
});