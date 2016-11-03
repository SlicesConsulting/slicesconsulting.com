
+function ($) {

	/*!
	 * Scroll.js
	 * Adds a class to the header on scroll
	 * Based on a script from http://callmenick.com/post/animated-resizing-header-on-scroll
	 */
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1){ 
            
            $('header').addClass("smaller");

        } else {

            $('header').removeClass("smaller");

        }
    });

    
    // Change mobile menu icon to close icon on click
	$(".navbar-toggle").on("click", function () {
	    $(this).toggleClass("active");
	});

    img = $(".testimonials .testimonial-img").detach()

    img.appendTo( "#pager" );

    $( "#pager img" ).wrap( "<li><a href='#'></a></li>" );

    $(".testimonials").responsiveSlides({
        // pager: true, 
        // pause: true,
        // pauseControls: true,
        manualControls: "#pager",
    }); 


}(jQuery);