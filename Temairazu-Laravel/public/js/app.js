var btn = $('#button') //floating-button;

$(document).ready(function () {

    /* Fixed navbar */
    function menuscroll() {
        var $navmenu = $('.nav-menu');
        var $navbar = $('.navbar');
        if ($(window).scrollTop() > 50) {
            $navmenu.addClass('is-scrolling');
            $navbar.addClass('navbar-light');
            $navbar.removeClass('navbar-dark');
        } else {
            $navmenu.removeClass("is-scrolling");
            $navbar.removeClass('navbar-light');
            $navbar.addClass('navbar-dark');
        }
    }
    menuscroll();
    $(window).on('scroll', function () {
        menuscroll();
    });


    /* Navbar close on click*/
    $('.navbar-nav > li:not(.dropdown) > a').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    });


    /* Navbar BG toggle */
    var siteNav = $('#navbar');
    siteNav.on('show.bs.collapse', function (e) {
        $(this).parents('.nav-menu').addClass('menu-is-open');
    })
    siteNav.on('hide.bs.collapse', function (e) {
        $(this).parents('.nav-menu').removeClass('menu-is-open');
    })


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


    /* Counter */
    $('.counter-sec').waypoint(function (direction) {
        $('.counter-member-a').easy_number_animate({
            start_value: 0,
            end_value: 1024,
            duration: 1500
        });
        $('.counter-member-b').easy_number_animate({
            start_value: 0,
            end_value: 160,
            duration: 1500
        });
        $('.counter-member-c').easy_number_animate({
            start_value: 0,
            end_value: 93,
            duration: 1500
        });
        $('.counter-member-d').easy_number_animate({
            start_value: 0,
            end_value: 771,
            duration: 1500
        });
        this.destroy();
    }, {
        offset: '50%',
    });




    //slide-animation
    $('.multi-sec').waypoint(function (direction) {
        $('.multi-sec').addClass('animated fadeInUp');
    }, {
        offset: '50%'
    });

    $('.dantai-travel-sec').waypoint(function (direction) {
        $('.dantai-travel-sec').addClass('animated fadeInUp');
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


    //Go to top button
    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, '300');
    });

});

//loading-screen
$(window).on("load", function () {
    $(".loader-wrapper").fadeOut("slow");
});

