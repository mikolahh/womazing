                                        
 <?php
global $product;
$price_sale_content = '$'. $product->get_sale_price();
$price_regular_content = '$'. $product->get_regular_price();
$html_regular_content = '<span class="'.'products-item__price-reg'.'">'.$price_regular_content.'</span>';
$html_regular_content_not_sale = '<span class="'.'products-item__price-reg not-sale'.'">'.$price_regular_content.'</span>';



?>
                <!-- Card of one product in a group start -->
<div class="products-item">    
    <div class="products-item__img">
        <div class="products-item__overlay">
            <a href="<?php echo get_permalink(); ?>">                     
            </a>
        </div>
        <?php echo $product->get_image('full'); ?>                 
    </div>
    <h4 class="products-item__title">
        <!-- Выводим наименования наших товаров -->
        <a href="<?php echo get_permalink(); ?>"> <?= $product->get_name() ?> </a>
    </h4>
    <div class="products-item__price">

        <?php 
         if ($product->get_sale_price() == '') {
            echo $html_regular_content_not_sale;
         }
         else 
            echo $html_regular_content;         
         ?>                        
        <span class="products-item__price-sale">
            <?php
            if ($product->get_sale_price() !== '') {
                 echo $price_sale_content;
             } 
             ?>                       
        </span>
    </div>
        <a href="?add-to-cart=<?php $product->get_id ?>" data-quantity="1" class=" products-item__add-to-cart add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="<?php echo esc_attr($sku) ?>" aria-label="Add “<?php the_title_attribute() ?>” to your cart" rel="nofollow">В корзину</a>              
</div>

                <!-- Card of one product in a group end -->
                        
                        