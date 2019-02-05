

 /* template navigation
  -----------------------------------------------*/
 $('.main-navigation').onePageNav({
        scrollThreshold: 0.2, // Adjust if Navigation highlights too early or too late
        scrollOffset: 75, //Height of Navigation Bar
        filter: ':not(.external)',
        changeHash: true
    });

    /* Navigation visible on Scroll */
    mainNav();
    $(window).scroll(function () {
        mainNav();
    });

    function mainNav() {
        var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
        if (top > 40) $('.sticky-navigation').stop().animate({
            "opacity": '1',
            "top": '0'
        });
        else $('.sticky-navigation').stop().animate({
            "opacity": '0',
            "top": '-75'
        });
    }

    // isotope
    jQuery(document).ready(function($){

      if ( $('.iso-box-wrapper').length > 0 ) {

          var $container  = $('.iso-box-wrapper'),
            $imgs     = $('.iso-box img');

          $container.imagesLoaded(function () {

            $container.isotope({
            layoutMode: 'fitRows',
            itemSelector: '.iso-box'
            });

            $imgs.load(function(){
              $container.isotope('reLayout');
            })

          });

          //filter items on button click
          $('.filter-wrapper li a').click(function(){

              var $this = $(this), filterValue = $this.attr('data-filter');

          $container.isotope({
            filter: filterValue,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
          });


          // don't proceed if already selected
          if ( $this.hasClass('selected') ) {
            return false;
          }

          var filter_wrapper = $this.closest('.filter-wrapper');
          filter_wrapper.find('.selected').removeClass('selected');
          $this.addClass('selected');

            return false;
          });

      }

    });


$(document).ready(function() {

  /* Hide mobile menu after clicking on a link
    -----------------------------------------------*/
    $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });


  /* jQuery to collapse the navbar on scroll
    -----------------------------------------------*/
  $(window).scroll(function() {
      if ($(".navbar").offset().top > 50) {
          $(".navbar-fixed-top").addClass("top-nav-collapse");
      } else {
          $(".navbar-fixed-top").removeClass("top-nav-collapse");
      }
  });


   /*  smoothscroll
    -----------------------------------------------*/
   $(function() {
        $('.navbar-default a').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 49
            }, 1000);
            event.preventDefault();
        });
    });


    // Magnific Pop up for Portfolio section
    $('.portfolio-container').magnificPopup({
      delegate: '.portfolio-popup', // child items selector, by clicking on it popup will open
      type: 'image',
      gallery: {
        enabled: true
      }
    });


  /* Owl Carousel
    -----------------------------------------------*/
  $(document).ready(function() {
    $("#owl-testimonial").owlCarousel({
      autoPlay: 8000,
      singleItem: true,
    });
  });


  /* Parallax section
    -----------------------------------------------*/
  function initParallax() {
    $('#home').parallax("100%", 0.1);
    $('#testimonial').parallax("100%", 0.3);
    $('#about').parallax("100%", 0.1);
    $('#counter').parallax("100%", 0.2);
    $('#blog').parallax("100%", 0.1);
    $('#contact').parallax("100%", 0.3);

  }
  initParallax();


   /* Divider Counter
    -----------------------------------------------*/
  jQuery('.counter-item').appear(function() {
    jQuery('.counter-number').countTo();
    jQuery(this).addClass('funcionando');
    console.log('funcionando');
  });

  /* wow
  -------------------------------*/
  new WOW({ mobile: false }).init();

  });
/*
  function decorateWhatsAppLink() {
  //set up the url
  var url = 'whatsapp://send?text=';

  //define the message text
  var text = 'Hey check out this awesome blog at https://madole.github.io';

  //encode the text
  var encodedText = encodeURIComponent(text);

  //find the link
  var $whatsApp = $('.whatsapp a');

  //set the href attribute on the link
  $whatsApp.attr('href', url + encodedText);
}

//call the decorator function
decorateWhatsAppLink()
*/

var $backToTop = $(".back-to-top");
$backToTop.hide();


$(window).on('scroll', function() {
  if ($(this).scrollTop() > 100) {
    $backToTop.fadeIn();
  } else {
    $backToTop.fadeOut();
  }
});

$backToTop.on('click', function(e) {
  $("html, body").animate({scrollTop: 0}, 500);
});
