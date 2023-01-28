$(document).ready(function () {
  let screenWidth = $(document).width();
  if ($('.category__desc-info--downloads').length > 0) {
    $('.category__desc-data').append($('.category__desc-info--downloads'))
  }

  if (screenWidth < 1170) {
    $(".footer__info").append($('.footer__phone'));
    $(".header__top-list--catalog").append($('.header__bottom-list'));
  }
  if (screenWidth < 767) {
    $('.category__desc-image').before($('.category__desc-title'));
    $(".header__top-list").append($('.header__top-feedback'));
  }




});