$(window).on('scroll', function() {
    if ($(this).scrollTop() >= 1000) {
        $('#quick-top').show('fast');
    } else {
        $('#quick-top').hide('fast');
    }
});

$(document).on('click', '#quick-top', function(e) {
    $(window).scrollTop(0);
    e.preventDefault();
});
