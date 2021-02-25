/* ------------------------------------------------
  Project:   Loptus - Digital Marketing Agency Responsive HTML5 Template
  Author:    ThemeHt
------------------------------------------------ */
/* ------------------------
    Table of Contents

  1. Predefined Variables
  2. Preloader  
  3. FullScreen
  4. Slit Slider
  5. Counter
  3. Owl carousel
  7. Audioplayer
  9. Magnific Popup
  10. Isotope
  11. Scroll to top
  12. Banner Section
  13. Fixed Header
  14. Side Menu
  15. Text Color, Background Color And Image
  16. Accordian
  17. Contact Form
  18. Masonry
  19. Countdown
  20. Mouse Parallax
  21. insideText
  22. Wow Animation
  23. HT Window load and functions
  

------------------------ */

(function(jQuery) {

"use strict";

/*------------------------------------
  HT Predefined Variables
--------------------------------------*/
var jQuerywindow = jQuery(window),
    jQuerydocument = jQuery(document),
    jQuerybody = jQuery('body'),
    jQueryfullScreen = jQuery('.fullscreen-banner') || jQuery('.section-fullscreen'),
    jQueryhalfScreen = jQuery('.halfscreen-banner'),
    searchActive = false;

//Check if function exists
jQuery.fn.exists = function () {
  return this.length > 0;
};


/*------------------------------------
  HT PreLoader
--------------------------------------*/
function preloader() {
   jQuery("#load").fadeOut();
   jQuery('#ht-preloader').delay(0).fadeOut('slow');
};


/*------------------------------------
  HT FullScreen
--------------------------------------*/
function fullScreen() {
    if (jQueryfullScreen.exists()) {
        jQueryfullScreen.each(function () {
        var jQueryelem = jQuery(this),
        elemHeight = jQuerywindow.height();
        if(jQuerywindow.width() < 768 ) jQueryelem.css('height', elemHeight/ 1);
        else jQueryelem.css('height', elemHeight);
        });
        }
        if (jQueryhalfScreen.exists()) {
        jQueryhalfScreen.each(function () {
        var jQueryelem = jQuery(this),
        elemHeight = jQuerywindow.height();
        jQueryelem.css('height', elemHeight / 2);
        });
    }
};


/*------------------------------------
  HT Counter
--------------------------------------*/
function counter() {  
  jQuery('.count-number').countTo({
    refreshInterval: 2
  });   
};


/*------------------------------------
  HT Owl Carousel
--------------------------------------*/
function owlcarousel() {
jQuery('.owl-carousel').each( function() {
  var jQuerycarousel = jQuery(this);
  jQuerycarousel.owlCarousel({
      items : jQuerycarousel.data("items"),
      slideBy : jQuerycarousel.data("slideby"),
      center : jQuerycarousel.data("center"),
      loop : true,
      margin : jQuerycarousel.data("margin"),
      dots : jQuerycarousel.data("dots"),
      nav : jQuerycarousel.data("nav"),      
      autoplay : jQuerycarousel.data("autoplay"),
      autoplayTimeout : jQuerycarousel.data("autoplay-timeout"),
      navText : [ '<span class="fas fa-long-arrow-alt-left"><span>', '<span class="fas fa-long-arrow-alt-right"></span>' ],
      responsive: {
        0:{items: jQuerycarousel.data('xs-items') ? jQuerycarousel.data('xs-items') : 1},
        576:{items: jQuerycarousel.data('sm-items')},
        768:{items: jQuerycarousel.data('md-items')},
        1024:{items: jQuerycarousel.data('lg-items')},
        1200:{items: jQuerycarousel.data("items")}
      },
  });
});
};


/*------------------------------------
  HT Audio Player
--------------------------------------*/  
function lightgallery() {
 jQuery('audio').audioPlayer();
};


/*------------------------------------
  HT Magnific Popup
--------------------------------------*/
function magnificpopup() {
jQuery('.popup-gallery').magnificPopup({
    delegate: 'a.popup-img',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
      }
    }
  });
if (jQuery(".popup-youtube, .popup-vimeo, .popup-gmaps").exists()) {
     jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,
          fixedContentPos: false
    });
  }

};
        

/*------------------------------------
  HT Isotope
--------------------------------------*/ 
function isotope() {
  // init Isotope
  var jQuerygrid = jQuery('.grid').isotope({
    itemSelector: '.grid-item',
    layoutMode: 'fitRows',
  });

  // filter functions
  var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function() {
      var number = jQuery(this).find('.number').text();
      return parseInt( number, 10 ) > 50;
    },
    // show if name ends with -ium
    ium: function() {
      var name = jQuery(this).find('.name').text();
      return name.match( /iumjQuery/ );
    }
  };

  // bind filter button click
  jQuery('.portfolio-filter').on( 'click', 'button', function() {
    var filterValue = jQuery( this ).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    jQuerygrid.isotope({ filter: filterValue });
  });


  // change is-checked class on buttons
  jQuery('.portfolio-filter').each( function( i, buttonGroup ) {
    var jQuerybuttonGroup = jQuery( buttonGroup );
    jQuerybuttonGroup.on( 'click', 'button', function() {
      jQuerybuttonGroup.find('.is-checked').removeClass('is-checked');
      jQuery( this ).addClass('is-checked');
    });
  });
};


/*------------------------------------
  HT Scroll to top
--------------------------------------*/
function scrolltop() {
  var pxShow = 300,
    goTopButton = jQuery(".scroll-top")
    // Show or hide the button
  if (jQuery(window).scrollTop() >= pxShow) goTopButton.addClass('scroll-visible');
  jQuery(window).on('scroll', function () {
    if (jQuery(window).scrollTop() >= pxShow) {
      if (!goTopButton.hasClass('scroll-visible')) goTopButton.addClass('scroll-visible')
    } else {
      goTopButton.removeClass('scroll-visible')
    }
  });
  jQuery('.smoothscroll').on('click', function (e) {
    jQuery('body,html').animate({
      scrollTop: 0
    }, 1000);
    return false;
  });
};



 /*------------------------------------
  HT Banner Section
--------------------------------------*/
function headerheight() {
  jQuery('.fullscreen-banner .align-center, .nav-arrows span').each(function(){
    var headerHeight=jQuery('.header').height();
    // headerHeight+=15; // maybe add an offset too?
    jQuery(this).css('padding-top',headerHeight+'px');
  });
};


/*------------------------------------
  HT Fixed Header
--------------------------------------*/
function fxheader() {
  jQuery(window).on('scroll', function () {
    if (jQuery(window).scrollTop() >= 100) {
      jQuery('#header-wrap').addClass('fixed-header');
    } else {
      jQuery('#header-wrap').removeClass('fixed-header');
    }
  });
};

/*------------------------------------
  HT Side Menu
--------------------------------------*/
function sidenav() {
jQuery('.ht-nav-toggle').on('click', function(event) {
      event.preventDefault();
      var jQuerythis = jQuery(this);
      if( jQuery('body').hasClass('menu-show') ) {
        jQuery('body').removeClass('menu-show');
        jQuery('#ht-main-nav > .ht-nav-toggle').removeClass('show');
      } else {
        jQuery('body').addClass('menu-show');
        setTimeout(function(){
          jQuery('#ht-main-nav > .ht-nav-toggle').addClass('show');
        }, 900);
      }
    })
};

/*------------------------------------------
  HT Text Color, Background Color And Image
---------------------------------------------*/
function databgcolor() {
    jQuery('[data-bg-color]').each(function(index, el) {
     jQuery(el).css('background-color', jQuery(el).data('bg-color'));  
    });
    jQuery('[data-text-color]').each(function(index, el) {
     jQuery(el).css('color', jQuery(el).data('text-color'));  
    });
    jQuery('[data-bg-img]').each(function() {
     jQuery(this).css('background-image', 'url(' + jQuery(this).data("bg-img") + ')');
    });
};


/*------------------------------------
  HT Accordian
--------------------------------------*/
function accordian() { 
  jQuery(".card").on("show.bs.collapse hide.bs.collapse", function(e) {
    if (e.type=='show'){
      jQuery(this).addClass('active');
    }else{
      jQuery(this).removeClass('active');
    }
  });  
jQuery('.accordion .card-header a').prepend('<span></span>');
};


/*------------------------------------
  HT Masonry
--------------------------------------*/
function masonry () {
  var jQuerymasonry = jQuery('.masonry'),
      jQueryitemElement = '.masonry-brick',
      jQueryfilters = jQuery('.portfolio-filter');  
      if (jQuerymasonry.exists()) {
        jQuerymasonry.isotope({
          resizable: true,
          itemSelector: jQueryitemElement,
        });

         // bind filter button click
     jQueryfilters.on( 'click', 'button', function() {
        var filterValue = jQuery(this).attr('data-filter');
         jQuerymasonry.isotope({ filter: filterValue });
      });
   }  
};


/*------------------------------------
  HT Search
--------------------------------------*/
function search() {
  if(jQuery('.search-form').length)
    {
      var searchForm = jQuery('.search-form');
      var searchInput = jQuery('.search-input');
      var searchButton = jQuery('.search-button');

      searchButton.on('click', function(event)
      {
        event.stopPropagation();

        if(!searchActive)
        {
          searchForm.addClass('active');
          searchActive = true;
          searchInput.focus();

          jQuery(document).one('click', function closeForm(e)
          {
            if(jQuery(e.target).hasClass('search-input'))
            {
              jQuery(document).one('click', closeForm);
            }
            else
            {
              searchForm.removeClass('active');
              searchActive = false;
            }
          });
        }
        else
        {
          searchForm.removeClass('active');
          searchActive = false;
        }
      }); 
    }
};


/*------------------------------------
  HT Countdown
--------------------------------------*/
function countdown() {
  jQuery('.countdown').each(function () {
    var jQuerythis = jQuery(this),
      finalDate = jQuery(this).data('countdown');
    jQuerythis.countdown(finalDate, function (event) {
      jQuery(this).html(event.strftime('<li><span>%-D</span><p>Days</p></li>' + '<li><span>%-H</span><p>Hours</p></li>' + '<li><span>%-M</span><p>Minutes</p></li>' + '<li><span>%S</span><p>Seconds</p></li>'));
    });
  });
};


/*------------------------------------
  HT Mouse Parallax
--------------------------------------*/
function mouse() {
  jQuery( document ).mousemove( function( e ) {
      jQuery( '.mouse-parallax' ).parallax( -30, e );
    });
}; 


/*------------------------------------
  HT insideText
--------------------------------------*/
function insideText() {
  var e, i = jQuery(window).height(),
            n = i / 2;
        jQuery(document).scroll(function() {
            e = jQuery(window).scrollTop(), jQuery(".insideText").each(function() {
                var i = jQuery(this),
                    o = i.parent("section"),
                    s = o.offset().top;
                i.css({
                    top: -(s - e) + n + "px"
                })
            }), jQuery(".bg-text").each(function() {
                var e = jQuery(this),
                    i = jQuery(window).height() / 2,
                    n = e.parent("div"),
                    o = jQuery(window).scrollTop(),
                    s = n.offset().top;
                jQuery(this).css({
                    top: -(s - o) + i + "px"
                })
            })
    })
};

/*------------------------------------
  HT Wow Animation
--------------------------------------*/
function wowanimation() {
    var wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: false,
        live: true
    });
    wow.init();
}


/*------------------------------------
  HT Window load and functions
--------------------------------------*/
jQuery(document).ready(function() {
    owlcarousel(),
    fullScreen(),
    counter(),
    lightgallery(),
    magnificpopup(),
    scrolltop(),
    headerheight()
    fxheader(),
    sidenav(),
    databgcolor(),  
    accordian(),
    search(),
    countdown(),
    mouse(),
    insideText();
});


jQuerywindow.resize(function() {
    fullScreen();
});


jQuery(window).on('load', function() {
    preloader(),
    isotope(),
    masonry(),
    wowanimation();
});

  })(jQuery);