
$(document).ready(function () {

//уменьшение количества атрибутов в карточках товара до 45ти.
  let numberOfCategoryAttributes = 3;
  let numberOfProductAttribute = 4;
  let productAttributesLists = $('.custom-attributes');
  let categoryAttributesLists = $('.category__card-features');
  
  
  if ($('.category__desc').length > 0 || $('.popular-products').length > 0) {
    contractionAttributs(productAttributesLists, numberOfProductAttribute);
  };
  if ($('.product-custom__card').length > 0){
    contractionAttributs(categoryAttributesLists, numberOfCategoryAttributes);
    //создаем кнопку "выбрать модель"
    let buttonProductCustomCard = $('<button class="product-custom__card-button">Выбрать модель</button>');
    //вставляем кнопку в конце карточек товара
    buttonProductCustomCard.appendTo(categoryAttributesLists);

  };

  function contractionAttributs(attributesList, numberAtributes) {
    attributesList.each(function (index, element) {
        let attributeItem = $(element).children();
        attributeItem.each(function (index, element) {
          if (index > (numberAtributes - 1)) {
            element.classList.add('visually-hidden');
          }
        })

      });
    }


  if ($('.card__feature').length == 0) {
    ($('.category__card-features')).each(function (index, item) {
      item.classList.add('visually-hidden');
    })

  }
});