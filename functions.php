<?php

global $product;
//подключить стили и скрипты
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('stylemincss', get_template_directory_uri() . '/app/css/style.min.css');

  wp_enqueue_script('script-name', get_template_directory_uri() . '/app/js/main.min.js', array(), '1.0.0', true);

  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('menus');
});
//отключить инлайновые стили блочного редактора
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );



function woocommerce_support()
{
  add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'woocommerce_support');

add_filter('woocommerce_enqueue_styles', '__return_empty_array');




//добавление хука woocommerce для добавление товаров на страницу в зависимости от метки
function woo_products_by_tags_shortcode($atts, $content = null)
{
  // Get attribuets
  extract(shortcode_atts(array(
    "tags" => 'popular'
  ), $atts));

  ob_start();

  // Define Query Arguments
  $args = array(
    'post_type' => 'product',
    'posts_per_page' => 10,
    'product_tag' => $tags
  );

  // Create the new query
  $loop = new WP_Query($args);

  // Get products number
  $product_count = $loop->post_count;

  if ($product_count > 0) :

    echo '<div class="tax-product_tag woocommerce-page">
  <div class="woocommerce">
    <ul class="products columns-' . esc_attr(wc_get_loop_prop('columns')) . '">';

    while ($loop->have_posts()) : $loop->the_post();
      wc_get_template_part('content', 'product');
    endwhile;

    echo '</ul>
  </div>
</div>';

  else :

    _e('No product matching your criteria.');

  endif; // endif $product_count > 0

  return ob_get_clean();
}

add_shortcode("woo_products_by_tags", "woo_products_by_tags_shortcode");

//добавление записей на страницу категории в зависимости от id
function add_post_by_category_shortcode()
{
  global $post;
  $cat_id = get_queried_object()->term_id;
  switch ($cat_id) {
    case 186:
      $myposts = get_posts([
        'numberposts' => -1,
        'category_name'  => 'linear-modules'
      ]);
      break;
    case 34:
      $myposts = get_posts([
        'numberposts' => -1,
        'category_name'  => 'drivers'
      ]);
      break;
    case 35:
      $myposts = get_posts([
        'numberposts' => -1,
        'category_name'  => 'liner-actuator__dc'
      ]);
      break;
    case 36:
      $myposts = get_posts([
        'numberposts' => -1,
        'category_name'  => 'liner-actuator__ac'
      ]);
      break;
    case 37:

      $myposts = get_posts([
        'numberposts' => 1,
        'category_name'  => 'stepper-actuator'
      ]);
      break;
    default:
      # code...
      break;
  }

  if ($myposts) {
    foreach ($myposts as $post) {

      setup_postdata($post);
?>
      <div class="category__info">
        <div class="category__info-container">
          <h4 class="category__info-title special__title">
            <?php the_title() ?>
          </h4>
        </div>
        <div class="category__info-container">
          <p class="category__info-text">
            <?php the_content(); ?></p>
        </div>
      </div>
  <?php
    }
  } else {
    // Постов не найдено
  }

  wp_reset_postdata(); // Сбрасываем $post
}

add_shortcode("add_post_by_category", "add_post_by_category_shortcode");


//Шорткод для добавления картинки категории 
function add_image_by_category_shortcode()
{
  global $wp_query;
  $cat = $wp_query->get_queried_object();
  $thumbnail_id = get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true);
  $image = wp_get_attachment_image_src($thumbnail_id, 'big');
  echo "<img class='category__desc-image' src='{$image[0]}'></img>";
};
add_shortcode("add_image_by_category", "add_image_by_category_shortcode");


//возможность добавления HTML тегов в описание категорий
foreach (array('pre_term_description') as $filter) {
  remove_filter($filter, 'wp_filter_kses');
}
foreach (array('term_description') as $filter) {
  remove_filter($filter, 'wp_kses_data');
}

//добавление описания в карточки категории
add_action('woocommerce_after_subcategory_title', 'custom_add_product_description', 12);
function custom_add_product_description($category)
{
  $cat_id        =    $category->term_id;
  $prod_term    =    get_term($cat_id, 'product_cat');
  $description =    $prod_term->description;

  echo '<div class="product__card-features category__card-features">' . $description . '</div>';
}

//добавление описания на страницу товара
add_action('woocommerce_after_subcategory_title', 'custom_add_product_description', 12);
function add_product_description($product)
{
  $product_id        =    $product->term_id;
  $prod_term    =    get_term($product_id, 'product_cat');
  $description =    $prod_term->description;

  echo '<div class="product__card-features category__card-features">' . $description . '</div>';
}
/**Дополнительное описание для категорий Woocommerce **/
add_action('product_cat_edit_form_fields', 'wpm_taxonomy_edit_meta_field', 10, 2);
function wpm_taxonomy_edit_meta_field($term)
{
  $t_id = $term->term_id;
  $term_meta = get_option("taxonomy_$t_id");
  $content = $term_meta['custom_term_meta'] ? wp_kses_post($term_meta['custom_term_meta']) : '';
  $settings = array('textarea_name' => 'term_meta[custom_term_meta]');
  ?>
  <tr class="form-field">
    <th scope="row" valign="top"><label for="term_meta[custom_term_meta]">Дополнительное описание</label></th>
    <td>
      <?php wp_editor($content, 'product_cat_details', $settings); ?>
    </td>
  </tr>
  <?php
}
add_action('edited_product_cat', 'save_taxonomy_custom_meta', 10, 2);
add_action('create_product_cat', 'save_taxonomy_custom_meta', 10, 2);
function save_taxonomy_custom_meta($term_id)
{
  if (isset($_POST['term_meta'])) {
    $t_id = $term_id;
    $term_meta = get_option("taxonomy_$t_id");
    $cat_keys = array_keys($_POST['term_meta']);
    foreach ($cat_keys as $key) {
      if (isset($_POST['term_meta'][$key])) {
        $term_meta[$key] = wp_kses_post(stripslashes($_POST['term_meta'][$key]));
      }
    }
    update_option("taxonomy_$t_id", $term_meta);
  }
}



//шорткод для добавления дополнительного описания категории
function wpm_product_cat_archive_add_meta_shortcode()
{
  $t_id = get_queried_object()->term_id;
  $term_meta = get_option("taxonomy_$t_id");
  $term_meta_content = $term_meta['custom_term_meta'];
  if ($term_meta_content != '') {
    if (is_tax(array('product_cat', 'product_tag')) && 0 === absint(get_query_var('paged'))) {
      echo '<div class="category__desc-info">';
      echo apply_filters('the_content', $term_meta_content);
      echo '</div>';
    }
  }
}
add_shortcode("wpm_product_cat_archive_add_meta", "wpm_product_cat_archive_add_meta_shortcode");

//шорткод для добавления дополнительного описания категории
function add_crosssell_in_product_card_shortcode()
{
  $crosssell_ids = get_post_meta(get_the_ID(), '_crosssell_ids');

  if (!empty($crosssell_ids)) {

    $crosssell_ids = $crosssell_ids[0];

    if (count($crosssell_ids) > 0) {

      $args = array(
        'post_type' => 'product',
        'ignore_sticky_posts' => 1,
        'no_found_rows' => 1,
        'posts_per_page' => apply_filters('woocommerce_cross_sells_total', $posts_per_page),
        'orderby' => $orderby,
        'post__in' => $crosssell_ids
      );

      $products = new WP_Query($args);

      $woocommerce_loop['columns'] = apply_filters('woocommerce_cross_sells_columns', $columns);

      if ($products->have_posts()) : ?>

        <div class="cross-sells">

          <p class="cross-sells__title"><?php _e('Сопутствующие товары', 'woocommerce') ?></з>

            <?php woocommerce_product_loop_start(); ?>

            <?php while ($products->have_posts()) : $products->the_post(); ?>

              <?php wc_get_template_part('content', 'product'); ?>

            <?php endwhile; // end of the loop. 
            ?>
            <?php woocommerce_product_loop_end(); ?>

        </div>

<?php endif;
    }

    wp_reset_query();
  }
}
add_shortcode("add_crosssell_in_product_card", "add_crosssell_in_product_card_shortcode");
?>