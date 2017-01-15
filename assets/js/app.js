"use strict";

jQuery(document).ready(function ($) {

    $("#menu-item-147").click(function(event) {
        event.preventDefault();
        $("#artists-dropdown").toggleClass('artists-dropdown--toggle');
        $(this).toggleClass('active');
    });

    $(".nav-mobile__toggle").click(function () {
        $(".nav-mobile").toggleClass('toggle');
        $(this).toggleClass("nav-mobile__toggle-transition");
    });
    // email form validation
    $("#mc-embedded-subscribe-form").on('submit', function (e) {
        if( $('.email').val() == '' ) {
            $("#email").addClass('email-error').html("Please enter your email address before hitting submit!");
            return false;
        }
    });

    $(".nav-close").click(function () {
        $('.nav .nav--mobile').slideUp();
    });
    $('#front-page-slider').slick({
        arrows: true,
        dots: true,
        // prevArrow: "<span class='slick-prev'>◀</span>",
        // nextArrow: "<span class='slick-next'>▶</span>"
        prevArrow: "<i class='material-icons slick-prev'>chevron_left</i>",
        nextArrow: "<i class='material-icons slick-next'>chevron_right</i>"
    });

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 96) {
            $(".nav-primary-scroll").addClass("nav-primary-scroll--toggle");
        } else {
            $(".nav-primary-scroll").removeClass("nav-primary-scroll--toggle");
        }
    });

    // Smooth Scrolling
    $(function () {
        $('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
});
