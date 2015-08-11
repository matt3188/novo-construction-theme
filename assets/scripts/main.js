/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // Header
  var header = $('.header');
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
      header.addClass('slimmer');
    } else {
      header.removeClass('slimmer');
    }
  });

  // Home page slideshow
  $('.cycle-slideshow').cycle({
    slides: 'li',
    next: '.next',
    prev: '.prev',
    fx: 'scrollHorz',
    pager: '> .pager-container',
    pagerTemplate: '<span class="banner-pager"></span>'
  });

  // Gallery
  $('.cycle-slideshow-gallery').cycle({
    slides: 'li',
    next: '.next',
    prev: '.prev',
    fx: 'scrollHorz',
    paused: true
  });

  // Client carousel
  $('.client-carousel').owlCarousel({
    stageElement: 'ul',
    itemElement: 'li',
    loop: true,
    nav: false,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive: {
      0: { items: 1 },
      600: { items: 3 },
      1000: { items: 5 }
    }
  });

  // Mobile menu trigger
  var $menuTrigger = $('#main-menu-trigger'),
    $menu = $('.main-navigation'),
    activeClass = 'on-screen';

  $menuTrigger.on('click', function(e) {
    $(this).toggleClass('is-active');
    e.preventDefault();
    $menu.toggleClass(activeClass);
  });

  // Adds class of 'last-word' of main-heading
  $('.page-header.standard .main-heading').each(function(index, element) {
    var heading = $(element);
    var word_array, last_word, first_part;

    word_array = heading.html().split(/\s+/); // split on spaces
    last_word = word_array.pop();             // pop the last word
    first_part = word_array.join(' ');        // rejoin the first words together

    heading.html([first_part, ' <span class="last-word">', last_word, '</span>'].join(''));
  });

  var $container = $('.isotope').isotope({
    itemSelector: '.isotope-item'
  });
  $('.category-list').on( 'click', 'button', function() {
    var filterValue = $(this).data('filter');
    $('.category-list button').removeClass('is-active');
    if(!$(this).hasClass('is-active')) {
      $(this).addClass('is-active');
    }
    $container.isotope({ filter: filterValue });
  });

  $('.masonry').masonry({
    itemSelector: '.masonry-item',
    isOriginLeft: false
  });

  /**
   * Google Map
   */
  var map;
  function init() {
    var mapOptions = {
      center: new google.maps.LatLng(51.881154, 0.025315),
      zoom: 15,
      zoomControl: false,
      disableDoubleClickZoom: true,
      mapTypeControl: false,
      scaleControl: false,
      scrollwheel: false,
      panControl: false,
      streetViewControl: false,
      draggable: true,
      overviewMapControl: false,
      overviewMapControlOptions: {
        opened: false,
      },
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: [{
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#d3d3d3"
        }]
      }, {
        "featureType": "transit",
        "stylers": [{
          "color": "#808080"
        }, {
          "visibility": "off"
        }]
      }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{
          "visibility": "on"
        }, {
          "color": "#b3b3b3"
        }]
      }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#ffffff"
        }]
      }, {
        "featureType": "road.local",
        "elementType": "geometry.fill",
        "stylers": [{
          "visibility": "on"
        }, {
          "color": "#ffffff"
        }, {
          "weight": 1.8
        }]
      }, {
        "featureType": "road.local",
        "elementType": "geometry.stroke",
        "stylers": [{
          "color": "#d7d7d7"
        }]
      }, {
        "featureType": "poi",
        "elementType": "geometry.fill",
        "stylers": [{
          "visibility": "on"
        }, {
          "color": "#ebebeb"
        }]
      }, {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [{
          "color": "#a7a7a7"
        }]
      }, {
        "featureType": "road.arterial",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#ffffff"
        }]
      }, {
        "featureType": "road.arterial",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#ffffff"
        }]
      }, {
        "featureType": "landscape",
        "elementType": "geometry.fill",
        "stylers": [{
          "visibility": "on"
        }, {
          "color": "#efefef"
        }]
      }, {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#696969"
        }]
      }, {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [{
          "visibility": "on"
        }, {
          "color": "#737373"
        }]
      }, {
        "featureType": "poi",
        "elementType": "labels.icon",
        "stylers": [{
          "visibility": "off"
        }]
      }, {
        "featureType": "poi",
        "elementType": "labels",
        "stylers": [{
          "visibility": "off"
        }]
      }, {
        "featureType": "road.arterial",
        "elementType": "geometry.stroke",
        "stylers": [{
          "color": "#d6d6d6"
        }]
      }, {
        "featureType": "road",
        "elementType": "labels.icon",
        "stylers": [{
          "visibility": "off"
        }]
      }, {}, {
        "featureType": "poi",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#dadada"
        }]
      }],
    };
    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);
    var locations = [
      [
        'NOVO Construction',
        'undefined',
        'undefined',
        'undefined',
        'undefined',
        51.881154, 0.025315,
        'http://staging.novoconstruction.co.uk/wp-content/themes/novo-construction/dist/images/novo-pin.png'
      ]
    ];
    for (i = 0; i < locations.length; i++) {
      if (locations[i][1] === 'undefined') {
        description = '';
      } else {
        description = locations[i][1];
      }
      if (locations[i][2] === 'undefined') {
        telephone = '';
      } else {
        telephone = locations[i][2];
      }
      if (locations[i][3] === 'undefined') {
        email = '';
      } else {
        email = locations[i][3];
      }
      if (locations[i][4] === 'undefined') {
        web = '';
      } else {
        web = locations[i][4];
      }
      if (locations[i][7] === 'undefined') {
        markericon = '';
      } else {
        markericon = locations[i][7];
      }
      marker = new google.maps.Marker({
        icon: markericon,
        position: new google.maps.LatLng(locations[i][5], locations[i][6]),
        map: map,
        title: locations[i][0],
        desc: description,
        tel: telephone,
        email: email,
        web: web
      });
      link = '';
    }

  }
  google.maps.event.addDomListener(window, 'load', init);

  // The routing fires all common scripts,
  // followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
