jQuery(function($) {
  $('.js-menu').on('click', function() {
    $('.js-slidemenu').addClass('is-open');
    $('.js-mask').addClass('is-open');
  });
  $('.js-close').on('click', function() {
    $('.js-slidemenu').removeClass('is-open');
    $('.js-mask').removeClass('is-open');
  });
});