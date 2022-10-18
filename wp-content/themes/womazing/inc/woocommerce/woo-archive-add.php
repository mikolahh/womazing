<?php

add_action('woocommerce_before_main_content', 'womazing_add_wrap_breadcrumb', 20);
 function womazing_add_wrap_breadcrumb() {
 	if (is_shop() or is_product_category()) {
 		?>
        <section class="shop-header">
        	<div class="container">
        		<h1 class="shop-header-title page-title"><?php woocommerce_page_title(); ?>   			
        		</h1>
        		<div class="shop-header-breadcrumb breadcrumb">
        			<?php woocommerce_breadcrumb() ?> 			
        		</div>
        		<div class="wp-cat-wrap">
        			<a href="<?php get_permalink(wc_get_page_id( 'shop')) ?>">
	                    <h2>
	                    	Все
	                	</h2>            
            		</a>
            <?php            
            woocommerce_output_product_categories();      
              ?>        
        		</div>
        	</div>
        </section>
 		<?php
 	} 	
 }
 // output woocommerce_catalog_ordering
 add_action('woocommerce_archive_description', 'woocommerce_catalog_ordering', );

 add_action('woocommerce_before_shop_loop', 'womazing_shop_maim_wrap_start', 10);
 function womazing_shop_maim_wrap_start() {
  if (is_shop() or is_product_category()) {
    ?>
    <section class="shop-main">
      <div class="container">
        <div class="products-wrap">
    <?php     
  }
 }

 add_action('woocommerce_after_shop_loop', 'woocommerce_result_count', 5);


 add_action('woocommerce_after_shop_loop', 'womazing_products_wrap_end', 10);
 function womazing_products_wrap_end() {
 if (is_shop() or is_product_category()) {
    ?>          
        </div>        
    <?php     
  }
 }
 add_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 15);
 add_action('woocommerce_after_shop_loop', 'womazing_shop_main_wrap_end', 20);
 function womazing_shop_main_wrap_end() {
 if (is_shop() or is_product_category()) {
    ?> 
      </div>     
    </section>
    <?php     
  }
 }

 // change catalog order by
 add_filter('woocommerce_catalog_orderby', 'womazing_catalog_orderby');
 function womazing_catalog_orderby($catalog) {
  // удаляем элементы массива
  unset($catalog['popularity']);
  unset($catalog['rating']);
  unset($catalog['date']);
  return $catalog;
 }