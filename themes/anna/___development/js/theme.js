(function($) {
  /**
   * Scroll Function
   */
  var scrollFunction = function(e) {
    var a = 'hello world!';
    console.log(a);
  }
  /**
   * Resize Function
   */
  $(window).on('scroll', scrollFunction);
  // $( window ).on( 'resize load', resizeFunction );

})(jQuery);