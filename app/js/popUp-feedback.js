
$(document).ready(function () {
  dataLayer = [];
  let popUp = $('.feedback-popUp');
  let closetrigger = $('.feedback-popUp__close');

  if (popUp.length !==0) {
    openPopUp($('.header__top-feedback'));
    openPopUp($('.product-card__button'));
    openPopUp($('.footer__feedback'));

    closePopUp(closetrigger);
    closeBlackout(popUp);
    
  }
    
  function openPopUp(openTrigger){
    openTrigger.on('click', function(){
      $('.feedback-popUp__blackout').show();
      popUp.show();
      $('body').css("overflow", "hidden"); //удаление скролла по странице
    })
  }
  function closePopUp(closetrigger) {
    closetrigger.on('click', function () {
      popUp.hide();
      $('.feedback-popUp__blackout').hide();
      $('body').css("overflow", "auto");
    })
  }
  function closeBlackout(element){
    $(document).click(function (e) {
      if ($(e.target).is('.feedback-popUp__blackout')) {
        element.hide();
        $('.feedback-popUp__blackout').hide();
        $('body').css("overflow", "auto");
      }
    })
  }

  //открытие попАпа при удачной отправке  контактной формы popUp
  $("#feedback-popUp").on('wpcf7mailsent', function (event) {
    dataLayer.push({ 'event': 'zakaz_zvonka' });  //гугл тег-менеджер
    let answerTitle = 'Спасибо, что обратились!';
    let answerText = 'Специалист свяжется с Вами в ближайшее время.';
    showAnswerFeedback(answerTitle, answerText);
    closeAnswerFeedback(closetrigger);
    closeBlackout($('.feedback-popUp__answer'));
    popUp.hide();
  });
  //открытие попАпа при НЕудачной  контактной формы popUp
  $("#feedback-popUp").on('wpcf7mailfailed', function (event) {
    let answerTitle = 'При отправке сообщения произошла ошибка';
    let answerText = 'Пожалуйста, попробуйте ещё раз позже.';
    showAnswerFeedback(answerTitle, answerText);
    
    closeAnswerFeedback(closetrigger);
    closeBlackout($('.feedback-popUp__answer'));
    popUp.hide();
  });

  //открытие попАпа при удачной отправке формы обратной связи
  $("#feedback-form").on('wpcf7mailsent', function (event) {
    dataLayer.push({ 'event': 'zayavka' });
    let answerTitle = 'Спасибо, что обратились!';
    let answerText = 'Специалист свяжется с Вами в ближайшее время.';
    showAnswerFeedback(answerTitle, answerText);
    closeAnswerFeedback(closetrigger);
    closeBlackout($('.feedback-popUp__answer'));
  });
  //открытие попАпа при НЕудачной отправки формы обратной связи
  $("#feedback-form").on('wpcf7mailfailed', function (event) {
    let answerTitle = 'При отправке сообщения произошла ошибка';
    let answerText = 'Пожалуйста, попробуйте ещё раз позже.';
    showAnswerFeedback(answerTitle, answerText);
    closeAnswerFeedback(closetrigger);
    
  });

  function showAnswerFeedback(answerTitle,answerText){
    //добавляем затемнение экрана
    $('.feedback-popUp__blackout').show();
    //открываем попАп ответа
    $('.feedback-popUp__answer').show();
    //отчищаем тег заголовка и текста попАпа
    $('.feedback-popUp__answer-title').text(' ');
    $('.feedback-popUp__answer-text').text(' ');
    //добавляем текст в заголовок и параграф в зависимости от удачной или не удачной отправки
    $('.feedback-popUp__answer-title').prepend(answerTitle);
    $('.feedback-popUp__answer-text').prepend(answerText);
  }
  function closeAnswerFeedback(closetrigger){
    closetrigger.on('click', function () {
      $('.feedback-popUp__answer').hide();
      $('.feedback-popUp__blackout').hide();
    })
  } 


  
})