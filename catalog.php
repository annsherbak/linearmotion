<?php
/*
Template Name: catalog
*/
?>


<?php get_header() ?>
<main class="main" id="category__main">
  <div class="husk">
    <div class="container">
      <!-- <section class="breadcrums">
                <ul class="breadcrums__list">
                    <li class="breadcrums__item">Каталог товаров</li>
                    <li class="breadcrums__item">Каталог товаров</li>
                    <li class="breadcrums__item">Линейные актуаторы</li>
                </ul>
            </section> -->

      <section class="main-product">
        <h1 class="main-product__title special__title">Каталог товаров</h1>

        <?php echo do_shortcode('[product_categories number="0" parent="0"]'); ?>


        <? the_content() ?>
        <!-- <ul class="main-product__cards">
        <li class="main-product__card">
          <a class="main-product__card-link" href="">
            <picture>
              <source media="(max-width:767px)" srcset="<?php bloginfo('template_url'); ?>/app/images/catalog__linear-mobil.png">
              <source media="(max-width: 1170px)" srcset="<?php bloginfo('template_url'); ?>/app/images/catalog__linear-tablet.png">
              <img class="main-product__card-pic" src="<?php bloginfo('template_url'); ?>/app/images/catalog__linear-desktop.png" alt="Линейные актуаторы">
            </picture>
            <h3 class="main-product__card-title">Линейные актуаторы</h3>
          </a>
        </li>
        <li class="main-product__card">
          <a class="main-product__card-link" href="">
            <picture>
              <source media="(max-width:767px)" srcset="<?php bloginfo('template_url'); ?>/app/images/catalog__linear_modules-mobil.png">
              <source media="(max-width: 1170px)" srcset="<?php bloginfo('template_url'); ?>/app/images/catalog__linear_modules-tablet.png">
              <img class="main-product__card-pic" src="<?php bloginfo('template_url'); ?>/app/images/catalog__linear_modules-desktop.png" alt="Линейные модули">
            </picture>
            <h3 class="main-product__card-title">Линейные модули</h3>
          </a>
        </li>
        <li class="main-product__card">
          <a class="main-product__card-link" href="">
            <picture>
              <source media="(max-width:767px)" srcset="<?php bloginfo('template_url'); ?>/app/images/catalog__controller-mobil.png">
              <source media="(max-width: 1170px)" srcset="<?php bloginfo('template_url'); ?>/app/images/catalog__controller-tablet.png">
              <img class="main-product__card-pic" src="<?php bloginfo('template_url'); ?>/app/images/catalog__controller-desktop.png" alt="Контроллеры">
            </picture>
            <h3 class="main-product__card-title">Контроллеры</h3>
          </a>
        </li>
      </ul> -->
      </section>
      <section class="questions">
        <div class="questions__content">
          <h2 class="questions__title special__title">Часто задаваемые вопросы</h2>
          <div class="questions__content-accordions">
            <?php
            global $post;

            $myposts = get_posts([
              'numberposts' => -1,
              'offset'      => 1,
              'category_name'    => 'faq'
            ]);

            if ($myposts) {
              foreach ($myposts as $post) {
                setup_postdata($post);
            ?>
                <div class="questions__content-accordion" itemscope itemtype="http://schema.org/Question">
                  <p class="questions__content-accordion--title" itemprop="name"><?php the_title() ?> </p>
                  <div class="questions__content-accordion--text" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer"><div itemprop="text"><?php the_content(); ?></div></div>
                </div>
            <?php
              }
            } else {
              // Постов не найдено
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?>


          </div>
        </div>
      </section>
      <section class="contact">
        <h2 class="contact__title special__title">Свяжитесь с одним из наших офисов</h2>
        <ul class="contact__cards">
          <li class="contact__card">
            <h3 class="contact__card-title">Санкт-Петербург</h3>
            <p class="contact__card-comment">
              Работаем с физическими лицами <br>
              и юридическими лицами
            </p>
            <p class="contact__card-adress">
              Полюстровский проспект 43, литера А<br>
              Бизнес-центр “Полюс” <br>
              м. Площадь Ленина, Выборгская
            </p>
            <div class="contact__card-info">
              <div class="contact__card-info--container">
                <p class="contact__card-info--item">Пн-Пт: 8:30-18:00</p>
              </div>
              <div class="contact__card-info--container">
                <a class="contact__card-info--item" href="tel:+78127030981">+7 (812) 703-09-81</a>
                <a class="contact__card-info--item" href="mailto:sale@electroprivod.ru">sale@electroprivod.ru</a>
              </div>

            </div>
          </li>
          <li class="contact__card">
            <h3 class="contact__card-title">Москва</h3>
            <p class="contact__card-comment">
              Работаем с физическими лицами <br>
              и юридическими лицами
            </p>
            <p class="contact__card-adress">
              Варшавское шоссе, дом 32, офис 309 <br>
              м. Нагатинская
            </p>
            <div class="contact__card-info">
              <div class="contact__card-info--container">
                <p class="contact__card-info--item">Пн-Пт: 8:30-18:00</p>
              </div>
              <div class="contact__card-info--container">
                <a class="contact__card-info--item" href="tel:+74999389391">+7 (499) 938-93-91</a>
                <a class="contact__card-info--item" href="mailto:msk@electroprivod.ru">msk@electroprivod.ru</a>
              </div>
            </div>
          </li>
        </ul>
      </section>
    </div>
  </div>


</main>
<?php get_footer() ?>
</div>