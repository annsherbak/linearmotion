
$(document).ready(function () {
  let screenWidth = $(document).width();
  onBurgerMenu();
  onSearch();

  function onBurgerMenu() {
    $('.header__top-burger').on('click', function () {
      $(this).toggleClass('open');
      $('.header__top-nav').slideToggle(300);
      $('.header__top-list--item').each(function (index, element) {
        $(this).show();
        $(this).children('.header__bottom-list').show();
      })
      // $('.header__top-list--item').slideToggle(1000);
    })

  }

  function onSearch() {
    $('.header__top-search--trigger').on('click', function () {
      if ($('.header__top-form.open').length == 0) {
        openSearch()
      }
      else {
        closeSearch()
      }

    })
    //клик на любую часть экрана вне меню
    $(document).click(function (e) {
      if ($('.header__top-form.open').length > 0) {
        if ($(e.target).is('.header__top-form--blackout')) {
          closeSearch()
        }
      }
    });
  };

  function openSearch() {
    $('.header__top-form').addClass('open');//форма
    if (screenWidth > 1170) {
      $('.header__top-form--blackout').show(); //затемненный экран  
      $('body').css("overflow", "hidden"); //удаление скролла по странице
    }

  }
  function closeSearch() {
    $('.header__top-form').removeClass('open');
    if (screenWidth > 1170) {
      $('.header__top-form--blackout').hide();
      $('body').css("overflow", "auto");
    }
  }
   
})