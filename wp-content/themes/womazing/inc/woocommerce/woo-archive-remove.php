<?php 
// remove output categories
remove_filter( 'woocommerce_product_loop_start', 'woocommerce_maybe_show_product_subcategories');

// remove woocommerce_output_content_wrapper jast in case
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);


// remove breadcrumb 
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
  // remove WC_Structured_Data::generate_website_data() jast in case 
  remove_action('woocommerce_before_main_content', 'WC_Structured_Data::generate_website_data()', 30); 

// 
   add_filter('woocommerce_show_page_title', 'womazing_remove_page_title');
  function womazing_remove_page_title() {
    if (is_shop() or is_product_category()) {
      return false;
    }
  }
   // remove woocommerce_taxonomy_archive_description  jast in case
  remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);

// remove woocommerce_product_archive_description  jast in case
  remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);

  // remove woocommerce_output_all_notices jast in case
  remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);

  // remove woocommerce_catalog_ordering
  remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

  // remove output sale flash
  remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);

// remove rating
  remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

  // remove pagination
  remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);



  // remove wrap end
  remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

  // remove sidebar
  remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar',);
  remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
  remove_action('', '',);







