
+function ($) {

	/*!
	 * Scroll.js
	 * Adds a class to the header on scroll
	 * Based on a script from http://callmenick.com/post/animated-resizing-header-on-scroll
	 */
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1){  

            console.log("we scrollin.");
            
            $('header').addClass("smaller");

        } else {

            $('header').removeClass("smaller");

        }
    });

    
    // Change mobile menu icon to close icon on click
	$(".navbar-toggle").on("click", function () {
	    $(this).toggleClass("active");
	});

}(jQuery);