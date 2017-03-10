jQuery(document).ready(function($) {

  $('#front-page-slider').slick({
    arrows: true,
    dots: true,
    prevArrow: '<i class=\'material-icons slick-prev\'>chevron_left</i>',
    nextArrow: '<i class=\'material-icons slick-next\'>chevron_right</i>'
  });

  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 96) {
      $('.nav-primary-scroll').addClass('nav-primary-scroll--toggle');
    } else {
      $('.nav-primary-scroll').removeClass('nav-primary-scroll--toggle');
    }
  });

  // Smooth Scrolling
  $(function() {
    $('a[href*=\'#\']:not([href=\'#\'])').click(function() {
      if (window.location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && window.location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
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
