jQuery(document).ready(function($) {
  $("#front-page-slider").slick({
    lazyLoad: "ondemand",
    arrows: true,
    dots: true,
    fade: true,
    speed: 300,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: "<i class='material-icons slick-prev'>chevron_left</i>",
    nextArrow: "<i class='material-icons slick-next'>chevron_right</i>"
  });

  // timeout to fadein the slider
  setTimeout(function() {
    $(".slider-content").addClass("slider-content--visible");
  }, 300);

  $(".nav-mobile-toggle").click(function() {
    $(this).toggleClass("nav-mobile-toggle-transition");
    $(".nav-mobile").toggleClass("toggle");
  });

  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 96) {
      $(".nav-primary-scroll").addClass("nav-primary-scroll--toggle");
    } else {
      $(".nav-primary-scroll").removeClass("nav-primary-scroll--toggle");
    }
  });
});
