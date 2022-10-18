<?php
// Подключаем woo локально к нашей теме

if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

    function womazing_add_woocommerce_support()
    {
        add_theme_support('woocommerce');
    }
    add_action('after_setup_theme', 'womazing_add_woocommerce_support');

    global $product;

    // remove all woocommerce styles according documentation start

/**
 * Set WooCommerce image dimensions upon theme activation
 */
// Remove each style one by one
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
    unset( $enqueue_styles['woocommerce-general'] );    // Remove the gloss
    unset( $enqueue_styles['woocommerce-layout'] );     // Remove the layout
    unset( $enqueue_styles['woocommerce-smallscreen'] );    // Remove the smallscreen optimisation
    return $enqueue_styles;
}
// Or just remove them all in one line
// add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// remove all woocommerce styles according documentation end

// load addit. files
require get_template_directory() . '/inc/woocommerce/woo-single-remove.php';
require get_template_directory() . '/inc/woocommerce/woo-single-add.php';
require get_template_directory() . '/inc/woocommerce/woo-archive-add.php';
require get_template_directory() . '/inc/woocommerce/woo-archive-remove.php';
require get_template_directory() . '/inc/woocommerce/woo-cart.php';
require get_template_directory() . '/inc/woocommerce/woo-checkout.php';

// Created custom woocommerce cart link with count (working!!!) jast in case - not use
function womazing_woocommerce_cart_link() {
    ?>
    <a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('View your shopping cart', 'womazing') ?>">
         <?php /*translators: number of items in the mini cart*/ ?>
         <span class="amount"><?php echo wp_kses_data(WC()->cart->get_cart_subtotal()); ?>
          </span>
         <span class="count"><?php echo wp_kses_data( sprintf( _n('%d item', '%d items', WC()->cart->get_cart_contents_count(), 'womazing'), WC()->cart->get_cart_contents_count())); ?> </span>        
    </a>

    <?php
}
// Add  stars by Artem start
function womazing_woocommerce_scripts() {
    wp_enqueue_style( 'womazing-woocommerce-style', get_template_directory_uri() . '/woocommerce/assets/css/woocommerce.css' );

    $font_path   = WC()->plugin_url() . '/assets/fonts/';
    $inline_font = '@font-face {
            font-family: "star";
            src: url("' . $font_path . 'star.eot");
            src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
                url("' . $font_path . 'star.woff") format("woff"),
                url("' . $font_path . 'star.ttf") format("truetype"),
                url("' . $font_path . 'star.svg#star") format("svg");
            font-weight: normal;
            font-style: normal;
        }';

    wp_add_inline_style( 'womazing-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'womazing_woocommerce_scripts' );
// Add rating stars by Artem end


// Добавление в хлебные крошки ссылки на страницу магазина WooCommerce
/*add_filter( 'woocommerce_get_breadcrumb', function($crumbs, $breadcrumb){
    $shop_page_id = wc_get_page_id('shop'); // Запрашиваем ID страницы магазина
    if($shop_page_id > 0 && !is_shop() && (is_product_taxonomy() || is_product())) { // Проверяем корректность полученного ID и чтобы текущая страница не была страницей магазина и то, что страница является страницей товара или категорией товаров
        $new_breadcrumb = [
            //_x( 'Магазин', 'breadcrumb', 'woocommerce' ), // Строка для добавления собственного названия "Магазина". Для использования раскомментируйте ее, но закомментируйте следующую
            get_the_title(wc_get_page_id('shop')), // Запрашиваем название страницы магазина
            get_permalink(wc_get_page_id('shop')) // Запрашиваем URL страницы магазина
        ];
        array_splice($crumbs, 1, 0, [$new_breadcrumb]); // Добавляем новый пункт в хлебные крошки  после пункта "Главная"
    }
    return $crumbs;
}, 10, 2 );*/











    

    
   


    
    



    









}



