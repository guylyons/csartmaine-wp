"use strict";

jQuery(document).ready(function ($) {

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

    var triangleImage = document.querySelector('.triangle-image'),
        recentPosts = document.querySelector('.recent-posts');

    if (recentPosts) {

        recentPosts.addEventListener('mouseover', function (e) {

            var target = event.target,
                targetClass = target.className,
                targetClassParent = target.parentElement.className;

            if (targetClass === 'recent-posts__link') {
                var targetClassElement = target.getAttribute('data-img-url');

                if (targetClassElement !== null) {
                    triangleImage.style.backgroundImage = 'url(' + targetClassElement + ')';
                }

                // } else if( targetClassParent === 'recent-posts__item' ) {
                //     var targetClassParentElement = target.parentElement.getAttribute('data-img-url');
                //
                //     if( targetClassParentElement !== null ) {
                //         triangleImage.style.backgroundImage = 'url(' + targetClassParentElement + ')';
                //     }
            }
        });
    }
});