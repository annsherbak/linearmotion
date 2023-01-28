<!DOCTYPE html>
<html <?php language_attributes(); ?> <head>
<meta charset=" <?php bloginfo('charset') ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= wp_get_document_title()  ?></title>
<?php wp_head(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-59ZKLDC');</script>
<!-- End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59ZKLDC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="header__top-inner">
                        <a href="/">
                            <picture>
                                <source srcset="<?php bloginfo('template_url'); ?>/app/images/header__logo-mobile.svg" media="(max-width: 767px)">
                                <source srcset="<?php bloginfo('template_url'); ?>/app/images/header__logo-tablet.svg" media="(max-width: 1170px)">
                                <img class="header__top-logo" src="<?php bloginfo('template_url'); ?>/app/images/header__logo-desktop.svg" alt="logo">
                            </picture>
                        </a>
                        <nav class="header__top-nav">
                            <?php wp_nav_menu([
                                'menu'  => 'Основная навигация',
                                'items_wrap'      => '<ul class="header__top-list">%3$s</ul>'
                            ]) ?>
                        </nav>
                        <div class="header__top-wrapper">
                            <div class="header__top-search">
                                <button class="header__top-search--trigger">
                                    <svg>
                                        <use xlink:href="<?php bloginfo('template_url'); ?>/app/images/sprite.svg#header__search"></use>
                                    </svg>
                                </button>


                                <div class="header__top-form" action="">
                                    <div class="header__top-form--container">
                                        <div class="header__top-form--decoration">
                                            <svg>
                                                <use xlink:href="<?php bloginfo('template_url'); ?>/app/images/sprite.svg#header__search"></use>
                                            </svg>
                                        </div>

                                        </button>

                                        <div class="ya-site-form ya-site-form_inited_no" data-bem="{&quot;action&quot;:&quot;http://linearmotion.ru/search/&quot;,&quot;arrow&quot;:false,&quot;bg&quot;:&quot;transparent&quot;,&quot;fontsize&quot;:18,&quot;fg&quot;:&quot;#E4E4E4&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;https://linearmotion.ru/&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_self&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:2,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:2711615,&quot;input_fg&quot;:&quot;#E4E4E4&quot;,&quot;input_bg&quot;:&quot;inherit&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;: &quot;Поиск&quot;,&quot;input_placeholderColor&quot;:&quot;#E4E4E4&quot;,&quot;input_borderColor&quot;:&quot;inherit&quot;}">
                                            <form action="https://yandex.ru/search/site/" method="get" target="_self" accept-charset="utf-8"><input type="hidden" name="searchid" value="2711615" /><input type="hidden" name="l10n" value="ru" /><input type="hidden" name="reqenc" value="" /><input type="search" name="text" value="" /><input type="submit" value="Найти" /></form>
                                        </div>
                                        <style type="text/css">
                                            .ya-page_js_yes .ya-site-form_inited_no {
                                                display: none;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            (function(w, d, c) {
                                                var s = d.createElement('script'),
                                                    h = d.getElementsByTagName('script')[0],
                                                    e = d.documentElement;
                                                if ((' ' + e.className + ' ').indexOf(' ya-page_js_yes ') === -1) {
                                                    e.className += ' ya-page_js_yes';
                                                }
                                                s.type = 'text/javascript';
                                                s.async = true;
                                                s.charset = 'utf-8';
                                                s.src = (d.location.protocol === 'https:' ? 'https:' : 'http:') + '//site.yandex.net/v2.0/js/all.js';
                                                h.parentNode.insertBefore(s, h);
                                                (w[c] || (w[c] = [])).push(function() {
                                                    Ya.Site.Form.init()
                                                })
                                            })(window, document, 'yandex_site_callbacks');
                                        </script>

                                    </div>


                                </div>
                            </div>
                            <div class="header__top-contacts">
                                <a class="header__top-contact" href="tel:88001009756">
                                    8 (800) 100-97-56
                                </a>
                                <button class="header__top-feedback">Заказать звонок</button>
                            </div>
                            <div class="header__top-burger">
                                <span class="header__top-burger--line"></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="header__bottom">
                <div class="container">
                    <nav class="header__bottom-nav">
                        <?php wp_nav_menu([
                            'menu'  => 'Меню продукции',
                            'items_wrap'      => '<ul class="header__bottom-list">%3$s</ul>'
                        ]) ?>
                    </nav>
                </div>
            </div>
            <div class="header__top-form--blackout"></div>

        </header>
        <div class="feedback-popUp__blackout"></div>
        <div class="feedback-popUp">
            <svg width="24" height="24" class="feedback-popUp__close">
                <use  xlink:href="<?php bloginfo('template_url'); ?>/app/images/sprite.svg#close"></use>
            </svg>
            <div class="feedback-popUp__container">
            <p class="feedback-popUp__title">Хотите узнать цену или
                есть вопросы по продукции?</p>
            <p class="feedback-popUp__text">Оставьте Ваш номер и мы перезвоним.
            </p>
            <p class="feedback-popUp__comment"> Заявки обрабатываются в будние дни с 9.00 до 18.00</p>
            <?php echo do_shortcode('[contact-form-7 id="41" title="Контактная форма popUp" html_id="feedback-popUp"]') ?>
            </div>
        </div>
        <div class="feedback-popUp__answer">
            <svg width="24" height="24" class="feedback-popUp__close">
                <use  xlink:href="<?php bloginfo('template_url'); ?>/app/images/sprite.svg#close"></use>
            </svg>
            <p class='feedback-popUp__answer-title'></p>
            <p class='feedback-popUp__answer-text'></p>
        </div>