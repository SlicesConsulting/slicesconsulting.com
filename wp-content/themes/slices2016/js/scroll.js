/*!
 * Scroll.js
 * Adds a class to the header on scroll
 * Based on a script from http://callmenick.com/post/animated-resizing-header-on-scroll
 */

+function ($) {

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1){  

            console.log("we scrollin.");
            
            $('header').addClass("smaller");

        } else {

            $('header').removeClass("smaller");

        }
    });

}(jQuery);