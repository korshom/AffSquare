(function($) { "use strict";

// jQuery(window).on('load',function(){
//   $(".preloader").delay(1600).fadeOut("slow");
// });

jQuery(window).on('load', function () {
  $(".egns-preloader").delay(1600).fadeOut("slow");
});


// wow animate 
setTimeout(myGreeting, 1800);
function myGreeting() {
  var wow = new WOW(
    {
      boxClass:     'wow',      // animated element css class (default is wow)
      animateClass: 'animated', // animation css class (default is animated)
      offset:       0,          // distance to the element when triggering the animation (default is 0)
      mobile:       true,       // trigger animations on mobile devices (default is true)
      live:         true,       // act on asynchronously loaded content (default is true)
      callback:     function(box) {
        // the callback is fired every time an animation is started
        // the argument that is passed in is the DOM node being animated
      },
      scrollContainer: null,    // optional scroll container selector, otherwise use window,
      resetAnimation: true,     // reset animation on end (default is true)
    }
  );
  wow.init();
}

// sticky header

window.addEventListener('scroll',function(){
  const header = document.querySelector('header.style-1');
  header.classList.toggle("sticky",window.scrollY > 0);
});

$('.mobile-menu-btn').on("click",function(){
  $('.main-nav').addClass('show-menu');
});

$('.menu-close-btn').on("click",function(){
  $('.main-nav').removeClass('show-menu');
});

// mobile-drop-down

$(".main-nav .bi").on('click', function (event) {
  var $fl = $(this);
  $(this).parent().siblings().find('.sub-menu').slideUp();
  $(this).parent().siblings().find('.bi').addClass('bi-chevron-down');
  if ($fl.hasClass('bi-chevron-down')) {
      $fl.removeClass('bi-chevron-down').addClass('bi-chevron-up');
  } else {
      $fl.removeClass('bi-chevron-up').addClass('bi-chevron-down');
  }
  $fl.next(".sub-menu").slideToggle();
});
}(jQuery));