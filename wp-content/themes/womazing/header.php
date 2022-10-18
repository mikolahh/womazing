<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package womazing
 */
 global $redux;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header" id="header">    
        <div class="container">           
            <div class="header-nav">                     
                <div class="header-nav__logo custom-logo-link">
                     <?php the_custom_logo(); ?>              
                </div>
                <nav class="header-nav__menu">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id' => 'primary-menu',
                            )
                        );
                    ?>                                 
                </nav>                
                <button type="button" class="header-nav__callback">                    
                </button>
                <a class="header-nav__tel" href="<?= $redux['contact-call-link'] ?>">
                    <?= $redux['contact-call-text'] ?>
                </a>                         
                <a class="header-nav__bag" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="Просмотрите корзину">
                    <img src="<?= $redux['header-bag-icon']['url'] ?>" alt="Корзина">
                    <span>
                    <?php echo WC()->cart->get_cart_contents_count();?>
                    </span>                    
                </a>
                <div class="header-nav__burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div> 
            </div>
        </div>
    </header>
    <?php
            // Modal window call order start
    get_template_part('callback');     
            // Modal window call order end

             // Modal window  successful call order start
    get_template_part('callback-success');
             // Modal window  successful call order end
    ?>
    <main>



