jQuery(document).ready(function($) {
  $(".nav-mobile-toggle").click(function() {
    $(this).toggleClass("nav-mobile-toggle-transition");
    $(".nav-mobile").toggleClass("toggle");
  });
});
