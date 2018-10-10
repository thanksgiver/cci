(function($) {
  var site_header = $('header#site-header');
  var mobile_header = $('header#mobile-header');
  var trigger = $('a.mobile-navigation-trigger');
  var modal = $('.modal');
  var mobile_menu = $('#mobile-navigation');
  var mobile_close = $('.mobile-close');

  trigger.click(function(e) {
    e.preventDefault();
    // console.log('click');
    modal.removeClass('d-none');
    mobile_menu.addClass('open');
    $(this).hide();
  });

  modal.click(function(e) {
    e.preventDefault();
    close_mobile_navigation();
  });

  mobile_close.click(function(e) {
    e.preventDefault();
    close_mobile_navigation();
  });

  function close_mobile_navigation() {
    modal.addClass('d-none');
    mobile_menu.removeClass('open');
    trigger.show();
  }


})(jQuery);