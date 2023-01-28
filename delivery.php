<?php
/*
Template Name: delivery
*/
?>

<?php get_header() ?>
<main class="main" id="category__main">
  <div class="container">
    <!-- <section class="breadcrums">
                <ul class="breadcrums__list">
                    <li class="breadcrums__item">Каталог товаров</li>
                    <li class="breadcrums__item">Каталог товаров</li>
                    <li class="breadcrums__item">Линейные актуаторы</li>
                </ul>
            </section> -->
    <div class="husk">
      <section class="delivery">
        <h1 class="delivery__title special__title">Доставка и оплата</h1>
        <ul class="delivery__cards">
          <li class="delivery__card delivery__card--full">
            <p class="delivery__card-title">
              Работаем с юридическими и физическими лицами
            </p>
            <div class="delivery__card-container">
              <p class="delivery__card-info">Оплата от юридических лиц принимается безналичным платежом.</p>
              <p class="delivery__card-info">Для физических лиц предусмотрена возможность наличной оплаты или картой в офисах компании, а также банковским переводом.</p>
              <p class="delivery__card-info delivery__card-info--grey">Для получения счета просим обратиться в отдел продаж по электронной почте
                <a href="mailto:sale@electroprivod.ru">sale@electroprivod.ru</a>(СПб) или <a href="mailto:msk@electroprivod.ru">msk@electroprivod.ru</a>(Мск).
              </p>

            </div>

          </li>

          <li class="delivery__card">
            <p class="delivery__card-title">
              Самовывоз из офиса
            </p>
            <div class="delivery__card-container">
              <p class="delivery__card-info delivery__card-info--grey">По предварительной договоренности продукцию можно забрать в одном из наших офисов.</p>
              <p class="delivery__card-info">Москва, улица Нагатинская, дом 1, <br> строение 29, офис 304
              </p>
              <p class="delivery__card-info">Санкт-Петербург, Полюстровский проспект, д.43А, офис 312
              </p>

            </div>

          </li>

          <li class="delivery__card">
            <p class="delivery__card-title">
              Доставка по России
            </p>
            <div class="delivery__card-container">
              <p class="delivery__card-info delivery__card-info--grey">Узнать подробную информацию и рассчитать стоимость доставки можно у менеджера по телефону <a href="tel:+78001009756">8800 100‑97‑56</a>.</p>
              <p class="delivery__card-info">Поставка продукции осуществляется в пределах РФ курьерской службой по принципу «от двери до двери». Стоимость и срок доставки могут варьироваться в зависимости от города и веса продукции.</p>
            </div>

          </li>
        </ul>

      </section>


      <?php echo do_shortcode('[contact-form-7 id="42" title="Форма обратной связи html_id="feedback-form"]'); ?>


    </div>

  </div>

</main>
<?php get_footer() ?>
</div>