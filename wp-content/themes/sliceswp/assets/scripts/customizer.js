(function($) {
  // Site title
  wp.customize('blogname', function(value) {
    value.bind(function(to) {
      $('.brand').text(to);
    });
  });
  
})(jQuery);
(function($) {
    $('.dropdown > a').append('<b class="caret"></b>').dropdown();
})(jQuery);
