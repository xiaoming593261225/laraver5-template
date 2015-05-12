$(function() {
    $('.section-selector').on('click', function (e) {
        e.preventDefault();
        $('.portfolio-section-container').animate(
            {
                opacity: 0,
                left: '-100%'
            },
            1000,
            function () {
                $('html,body').animate({
                        scrollTop: $("#portfolio").offset().top},
                    'slow', function () {
                        $('.portfolio-section-container').css('display', 'none');
                        $('.opened-section-container').addClass('active');
                    });
            }
        );
    });

    $('.show-portfolio').on('click', function (e) {
        e.preventDefault();
        $('.opened-section-container').animate({opacity:0}, 1000).addClass('active');
        $('.portfolio-section-container').css('display', 'block').animate({
            opacity:1,
            left: 0
        },
            1000,
            function () {
                $('.opened-section-container').css('opacity', 1);
            }
        );
    });
});