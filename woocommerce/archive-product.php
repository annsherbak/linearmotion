<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header();
global $post;

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');

//Находим id категории
$cat_id = get_queried_object()->term_id;

//вырезаем первую цифру id
$cat_id__shortened = substr($cat_id, 0, 1);

if ($cat_id < 40 || $cat_id == 186) : ?>
	<?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
		<h1 class="woocommerce-products-header__title special__title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

<?php else : ?>
	</div>
	<section class="category__desc">
		<div class="category__desc-container">
			<div class="category__desc-item category__desc-item--dark">
				<?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
					<h1 class="category__desc-title special__title"><?php woocommerce_page_title(); ?></h1>
				<?php endif; ?>
				<div class="category__desc-data"><? echo term_description(); ?></div>
			</div>
			<div class="category__desc-item category__desc-item--grey">

				<? echo do_shortcode("[add_image_by_category]"); ?>

				<? echo do_shortcode("[wpm_product_cat_archive_add_meta]"); ?>

			</div>
		</div>
	</section>
	<div class="container">
		<h2 class="woocommerce-products-header__title special__title">Модели серии</h2>
	<?php endif; ?>

	<?php
	if (woocommerce_product_loop()) {

		/**
		 * Hook: woocommerce_before_shop_loop.
		 *
		 * @hooked woocommerce_output_all_notices - 10
		 * @hooked woocommerce_result_count - 20
		 * @hooked woocommerce_catalog_ordering - 30
		 */
		// do_action('woocommerce_before_shop_loop');
		woocommerce_product_loop_start();

		//вывод карточек

		if (wc_get_loop_prop('total')) {
			while (have_posts()) {

				the_post();

				/**
				 * Hook: woocommerce_shop_loop.
				 */
				do_action('woocommerce_shop_loop');


				wc_get_template_part('content', 'product');
			}
		}

		woocommerce_product_loop_end();

		/**
		 * Hook: woocommerce_after_shop_loop.
		 *
		 * @hooked woocommerce_pagination - 10
		 */
		do_action('woocommerce_after_shop_loop');
	} else {
		/**
		 * Hook: woocommerce_no_products_found.
		 *
		 * @hooked wc_no_products_found - 10
		 */
		do_action('woocommerce_no_products_found');
	}




	//вывод дополнительного содержимого категорий в зависимости от вложенности
	switch ($cat_id) {
		case '186':
			echo do_shortcode("[add_post_by_category]");
			break;
		case '34':
			//добавление описания категории 3 уровня из записей
			echo do_shortcode("[add_post_by_category]");
			break;
		case '35':
			//добавление описания категории 3 уровня из записей
			echo do_shortcode("[add_post_by_category]");
			break;
		case '36':
			//добавление описания категории 3 уровня из записей
			echo do_shortcode("[add_post_by_category]");
			break;
		case '24':
			//добавление формы обратной связи
			echo do_shortcode('[contact-form-7 id="42" title="Форма обратной связи" html_id="feedback-form"]');
			//добавление продуктов с тегом популярное на категории 2 уровня
			echo '<div class="popular-products">';
			echo '<p class="popular-products__title">Популярные товары</p>';
			echo do_shortcode('[products paginate="true" tag="popular-actuators" limit="56" class="popular-products__list"]');
			echo '</div>';
			break;
		default:
			//добавление формы обратной связи
			echo do_shortcode('[contact-form-7 id="42" title="Форма обратной связи" html_id="feedback-form"]');
			break;
	}

	//закрывающие теги страницы
	do_action('woocommerce_after_main_content');

	//вывод подвала сайта
	get_footer();
