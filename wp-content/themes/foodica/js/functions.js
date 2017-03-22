/**
 * Theme functions file
 */
(function ($) {
    'use strict';

    var $document = $(document);
    var $window = $(window);


    /**
    * Document ready (jQuery)
    */
    $(function () {

        /**
         * Activate superfish menu.
         */
        $('.sf-menu').superfish({
            'speed': 'fast',
            'delay' : 0,
            'animation': {
                'height': 'show'
            }
        });

       /**
        * Activate jQuery.mmenu.
        */
       $("#menu-top-slide").mmenu({
           "slidingSubmenus": false,
           "extensions": [
               "theme-dark",
               "pageshadow",
               "border-full"
           ]
       });

       $("#menu-main-slide").mmenu({
           "slidingSubmenus": false,
           "extensions": [
               "theme-dark",
               "pageshadow",
               "border-full"
           ]
       });


        /**
         * FitVids - Responsive Videos in posts
         */
        $(".entry-content, .cover").fitVids();



        // tick toggle

        $(".shortcode-ingredients li").prepend('<span class="tick"></span>')


        $(".shortcode-ingredients li").click(function(){
            $(this).find("span").toggleClass("ticked");
            $(this).toggleClass("ticked");
        });




    });

    $window.on('load', function() {
        /**
         * Activate main slider.
         */
        $('#slider').sllider();

        setTimeout(function() {
            $('.section-footer .zoom-instagram-widget').sliderinsta().css('opacity', '1');
        }, 100);


    });


    $.fn.sllider = function() {
        return this.each(function () {
            var $this = $(this);

            var flky = new Flickity('.slides', {
                autoPlay: (zoomOptions.slideshow_auto ? parseInt(zoomOptions.slideshow_speed, 10) : false),
                cellAlign: 'center',
                contain: true,
                percentPosition: false,
                //prevNextButtons: false,
                pageDots: true,
                wrapAround: true,
                accessibility: false
            });
        });
    };


    $.fn.sliderinsta = function() {
        return this.each(function () {
            var $this = $(this);

            var flky = new Flickity('.section-footer .zoom-instagram-widget__items', {
                autoPlay: false,
                cellAlign: 'left',
                contain: true,
                percentPosition: false,
                prevNextButtons: false,
                pageDots: false,
                wrapAround: false,
                accessibility: false
            });
        });
    };



})(jQuery);

new UISearch( document.getElementById( 'sb-search' ) );
