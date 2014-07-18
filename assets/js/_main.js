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
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages

      // $('[rel="lightbox"]').lightbox();
      // $('img').lightbox();



      $("#my-menu").mmenu();
      // $("#my-menu").trigger("open.mm");
      $("#my-button").click(function(e) {
         $("#my-menu").trigger("open.mm");
         e.preventDefault();
      });


      // Initialize the Lightbox for any links with the 'fancybox' class
    // $(".thumbnail").fancybox();
 
    // Initialize the Lightbox automatically for any links to images with extensions .jpg, .jpeg, .png or .gif
    $("a[href$='.jpg'], a[href$='.png'], a[href$='.jpeg'], a[href$='.gif']").fancybox(
      {
      // beforeShow : function(){
      // this.title =  $(this.element).data("caption");
      // }
        padding : 50,
        openEffect  : 'elastic'
      }
    );

    $(".gallery a[href$='.jpg'], .gallery a[href$='.png'], .gallery a[href$='.jpeg'], .gallery a[href$='.gif']").attr('rel','gallery').fancybox({
    beforeLoad : function() {
        // this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        this.title = $(this.element).find('img').attr('alt');
        /*
            "this.element" refers to current element, so you can, for example, use the "alt" attribute of the image to store the title:
            this.title = $(this.element).find('img').attr('alt');
        */
    }
});
 
    // Initialize the Lightbox and add rel="gallery" to all gallery images when the gallery is set up using [gallery link="file"] so that a Lightbox Gallery exists
    // $(".gallery a[href$='.jpg'], .gallery a[href$='.png'], .gallery a[href$='.jpeg'], .gallery a[href$='.gif']").attr('rel','gallery').fancybox();
 
    // Initalize the Lightbox for any links with the 'video' class and provide improved video embed support
    // $(".video").fancybox({
    //     maxWidth        : 800,
    //     maxHeight       : 600,
    //     fitToView       : false,
    //     width           : '70%',
    //     height          : '70%',
    //     autoSize        : false,
    //     closeClick      : false,
    //     openEffect      : 'none',
    //     closeEffect     : 'none'
    // });


    // var go = true;
    //       $(window).scroll(function() {
    //         if ($(this).scrollTop() > 70 && go) {
    //           $(".banner").css('height', '65px');
    //           go = false;
    //           $(".banner").addClass('navbar');
    //         } else if ($(this).scrollTop() < 70 && !go) {
    //           // $(".banner").css('height', '41px');
    //           go = true;
    //           $(".banner").removeClass('navbar');
    //         }
    //       });





    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
