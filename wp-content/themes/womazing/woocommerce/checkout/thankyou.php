<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;
?>

 <section class="success-header">
    <div class="container">                
        <h1 class="success-title page-title">
        	Заказ принят
        </h1>  
        <div class="success-breadcrumb breadcrumb">
        <?php woocommerce_breadcrumb() ?>
        </div>               
    </div>
</section>
    <section class="success-main">
        <div class="container">
            <div class="success-wrap">
            	<div class="success-wrap__info">
            		<div class="success-wrap__icon">                      	
            		</div>
                	<div class="success-wrap__message">
                        <p class="success-wrap__title subsection-title">
                            Заказ успешно оформлен
                        </p>
                        <p class="success-wrap__desc">
                            Мы свяжемся с вами в ближайшее время! 
                        </p>
                	</div>                		
            	</div>
            	<a href="/" class="success-wrap__link btn-shop">
            		Перейти на главную                		
            	</a>                    
            </div>
        </div>
    </section>
