 <?php

// Add custom breadcrumb only! on single-product.php
    add_action('woocommerce_before_main_content', 'womazing_add_breadcrumb', 20);
    function womazing_add_breadcrumb() {
        if (is_product()) {
            ?>
        <section class="product-header" id="product-header">
            <div class="container">                
                  <?php woocommerce_template_single_title() ?> 
                <div class="product-header-breadcrumb breadcrumb">
                    <?php woocommerce_breadcrumb() ?>
                </div> 
            </div>            
        </section>
        <?php            
        }        
    }

    // Add custom section wrapper
    add_action('woocommerce_before_single_product_summary', 'womazing_add_wrap_section_product_main', 5);
    function womazing_add_wrap_section_product_main() {
        ?>
        <section class="product-main">
            <div class="container">               
               <div class="one-item">
                    <div class="one-item__img">    
        
        <?php
    }
    add_action('woocommerce_before_single_product_summary', 'womazing_add_wrap_product_img_end', 25);
    function womazing_add_wrap_product_img_end() {
        ?>                   
                    </div>
                    <div class="one-item__info">               
        <?php
    }
    add_action('woocommerce_after_single_product_summary', 'womazing_add_wrap_section_product_main_end', 5);
    function womazing_add_wrap_section_product_main_end() {
        ?>                   
                    </div>
                </div>
            </div>
        </section>
        <section class="related">
            <div class="container">                                
        <?php
    }
    add_action('woocommerce_after_single_product_summary', 'womazing_add_wrap_section_related_end', 25);
    function womazing_add_wrap_section_related_end() {
        ?>              
            </div>
        </section>                                     
        <?php
    }

    // Change text in cart button
    function womazing_cart_button_text() {
  return __( 'Добавить в корзину', 'womazing' );
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'womazing_cart_button_text' );

// Change woocommerce_product_related_products_heading start
add_filter('woocommerce_product_related_products_heading', function(){return false;});
function woocommerce_product_loop_start( $echo = true ) {
    ob_start();

    wc_set_loop_prop( 'loop', 0 );

    wc_get_template( 'loop/loop-start.php' );

    $loop_start = apply_filters( 'woocommerce_product_loop_start', ob_get_clean() );

    if ( $echo ) {
        // check to see if it's the related loop
        if (wc_get_loop_prop('name') == 'related'){
            // Change the heading to whatever you want
            echo "<h2>Связанные товары</h2>";
        }
        echo $loop_start; // WPCS: XSS ok.
    } else {
        return $loop_start;
    }
}
// Change woocommerce_product_related_products_heading end


