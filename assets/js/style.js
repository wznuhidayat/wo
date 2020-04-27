(function($) {
  "use strict"; // Start of use strict


  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('body').animate({
          scrollTop: (target.offset().top - 54)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });
  //active navbar
  $( '#mainNav .navbar-nav a' ).on( 'click', function () {
  $( '#mainNav .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
  $( this ).parent( 'li' ).addClass( 'active' );
  });
  
  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  // $('body').scrollspy({
  //   target: '#mainNav',
  //   offset: 56
  // });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  //scroll count
  $(window).scroll(startCounter);
  function startCounter() {
    var oTop = $('#counters').offset().top - window.innerHeight;
      if ($(window).scrollTop() > oTop) {
          $(window).off("scroll", startCounter);
          $('.counter-count').each(function () {
              var $this = $(this);
              jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                  duration: 3000,
                  easing: 'swing',
                  step: function () {
                      $this.text(Math.ceil(this.Counter));
                  }
              });
          });
      }
  }

  
})(jQuery); // End of use strict