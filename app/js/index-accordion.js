$(document).ready(function () {
  if ($('.questions')) {
    activateAccordion();
  }

  function activateAccordion() {
    let accordionTrigger = $('.questions__content-accordion--title');
    accordionTrigger.each(function (index, value) {
      $(this).on('click', function () {
        $(this).toggleClass('active')
        $(this).next().toggle(300);
        
      });
    });

  };
});
