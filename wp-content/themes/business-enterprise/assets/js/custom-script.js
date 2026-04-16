
// Slider Js

jQuery(document).ready(function(){
  var owl = jQuery('.service-slider.owl-carousel');
    owl.owlCarousel({
    margin: 0,
    nav: false,
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots: false,
    navText: ['<span class="dashicons dashicons-arrow-left-alt2"></span>','<span class="dashicons dashicons-arrow-right-alt2"></span>'],
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 2,
        nav: false
      },
      1000: {
        items: 2
      },
      1200: {
        items: 3
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });
});