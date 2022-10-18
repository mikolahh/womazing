<?php
if (! defined('ABSPATH')) {
	exit;
}

/**
 * Enqueue scripts and styles.
 */
function womazing_scripts() {
	wp_enqueue_style( 'womazing-main', get_template_directory_uri() . "/assets/css/main-styles.css");
	wp_enqueue_style( 'womazing-header', get_template_directory_uri() . "/assets/css/header-part-styles.css");
	wp_enqueue_style( 'womazing-footer', get_template_directory_uri() . "/assets/css/footer-part-styles.css");
	wp_enqueue_style( 'womazing-product', get_template_directory_uri() . "/assets/css/product-page-styles.css");
	wp_enqueue_style( 'womazing-shop', get_template_directory_uri() . "/assets/css/shop-page-styles.css");
	wp_enqueue_style( 'womazing-about', get_template_directory_uri() . "/assets/css/about-page-styles.css");
	wp_enqueue_style( 'womazing-contact', get_template_directory_uri() . "/assets/css/contact-page-styles.css");
	
	wp_enqueue_style( 'womazing-home-top', get_template_directory_uri() . "/assets/css/home-page-top-styles.css");
	wp_enqueue_style( 'womazing-home-new-coll', get_template_directory_uri() . "/assets/css/home-page-new-coll-styles.css");
	wp_enqueue_style( 'womazing-home-advantages', get_template_directory_uri() . "/assets/css/home-page-advantages-styles.css");
	wp_enqueue_style( 'womazing-home-dream-team', get_template_directory_uri() . "/assets/css/home-page-dream-team-styles.css");

	wp_enqueue_style( 'womazing-template-output', get_template_directory_uri() . "/assets/css/template-output-products-styles.css");
	wp_enqueue_style( 'womazing-cart', get_template_directory_uri() . "/assets/css/cart-page-styles.css");
	wp_enqueue_style( 'womazing-checout', get_template_directory_uri() . "/assets/css/checkout-page-styles.css");
	wp_enqueue_style( 'womazing-success', get_template_directory_uri() . "/assets/css/success-page-styles.css");

	wp_enqueue_script('womazing-jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('womazing-slick-slider', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, true);

	wp_enqueue_script('womazing-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);	
}
add_action( 'wp_enqueue_scripts', 'womazing_scripts' );


