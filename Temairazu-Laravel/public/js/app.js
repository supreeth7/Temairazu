$(document).ready(function () {

    /* smooth scrolling */
    $('a[href*="#"]')
        .not('[href="#"]')
        .not('[href="#0"]')
        .not('[href="#pr"]')
        .not('[href="#ir"]')
        .not('[href="#up"]')
        .click(function (event) {
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) {
                            return false;
                        } else {
                            $target.attr('tabindex', '-1');
                            $target.focus();
                        };
                    });
                }
            }
        });

    /* smooth scrolling */


    //slide-animation
    $('.wp-multi').waypoint(function (direction) {
        $('.multi-img').addClass('animated slideInUp');
    }, {
        offset: '50%'
    });

    $('.dantai-travel-sec').waypoint(function (direction) {
        $('.dantai-travel-sec .content-col').addClass('animated slideInLeft');
    }, {
        offset: '50%'
    });

    $('.dantai-travel-sec').waypoint(function (direction) {
        $('.dantai-travel-img').addClass('animated slideInRight');
    }, {
        offset: '50%'
    });


    //fade-animation
    $('.services-sec').waypoint(function (direction) {
        $('.services-sec').addClass('animated fadeIn');
    }, {
        offset: '50%'
    });

    $('.news-sec').waypoint(function (direction) {
        $('.news-sec').addClass('animated fadeIn');
    }, {
        offset: '50%'
    });

    $('.careers-sec').waypoint(function (direction) {
        $('.careers-sec').addClass('animated fadeIn');
    }, {
        offset: '50%'
    });
    //fade-in
});

//loading-screen
$(window).on("load", function () {
    $(".loader-wrapper").fadeOut("slow");
});
