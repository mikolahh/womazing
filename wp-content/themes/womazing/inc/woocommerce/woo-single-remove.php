<?php 




// remove woocommerce elements on product-page start

// remove default woocommerce wrapper on singl-product.php
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// Remove breadcrumb on singl-product.php jast in case
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

// remove notices on content-singl-product.php jast in case
    remove_action('woocommerce_before_single_product', 'woocommerce_output_all_notices', 10);

    // Remove output sale on content-singl-product.php
    remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);     

    // Remove product title on content-singl-product.php
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);

    // Remove product rating on content-singl-product.php
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);

        // Remove short descr. on content-singl-product.php
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

      // Remove output category on content-singl-product.php
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

    // Remove output_product_data_tabs (desc. etc) on content-singl-product.php
    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

    // Remove output sidebar on singl-product.php jast in case
    remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

    // remove woocommerce elements on product-page end















 