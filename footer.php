<footer class="footer">
 
  <div class="footer__container">
   <div class="footer__feedback"></div>
    <div class="footer__inner">
      <div class="footer__item footer__info">
        <img class="footer__logo" src="<?php bloginfo('template_url'); ?>/app/images/footer__logo-desktop.svg" alt="logo">
        <p class="footer__promo">
          Мы производим собственные системы управления электроприводами и поставляем продукцию от известных производителей электромеханических изделий.
        </p>

      </div>
      <div class="footer__item">
        <nav class="footer__nav">
          <?php wp_nav_menu([
            'menu'  => 'Подвал навигация',
            'items_wrap'      => '<ul class="footer__nav-list">%3$s</ul>'
          ]) ?>
        </nav>
      </div>
      <div class="footer__item footer__contacts">
        <div class="footer__contact">
          <p class="footer__contact-item footer__contact-sity">Санкт-Петербург</p>
          <a class="footer__contact-item" href="tel:+78127030981">8 812 703 09 81</a>
          <a class="footer__contact-item" href="mailto:sale@electroprivod.ru">sale@electroprivod.ru</a>
          <p class="footer__contact-item footer__contact-adress">Полюстровский проспект,<br> дом 43 литера А</p>
        </div>

        <div class="footer__contact">
          <p class="footer__contact-item footer__contact-sity">Москва</p>
          <a class="footer__contact-item" href="tel:+74999389391">8 499 938 93 91</a>
          <a class="footer__contact-item" href="mailto:sale@electroprivod.ru">msk@electroprivod.ru</a>
          <p class="footer__contact-item footer__contact-adress">Варшавское шоссе, дом 32, офис 309</p>
        </div>
      </div>
      <div class="footer__item footer__phone">
        <p class="footer__phone-text">Единый номер</p>
        <a class="footer__phone-link" href="tel:+78001009756">8 800 100 97 56</a>
        <p class="footer__phone-comment">бесплатный звонок по России</p>
      </div>

      <div class="footer__item footer__copyright">
        <p class="footer__copyright-text">Copyright ©2010 –
          <?php echo date('Y'); ?> Iinearmotion
        </p>
      </div>

    </div>
  </div>
</footer>
</div>

<?php wp_footer() ?>
</body>
</html>
