<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package womazing
 */
global $redux;
?>	
</main>
<footer class="footer" id="footer">
        <div class="container">
            <div class="footer-wrap">
                <div class="footer-wrap__legal">
                    <a class="footer-wrap__logo" href="<?php echo esc_url(home_url('/')); ?>">
                        <?php the_custom_logo(); ?>
                    </a>
                    <div class="footer-wrap__copyright">
                        <span>
                            <?= $redux['footer-cprt-first'] ?>
                        </span>
                        <span>
                            <?= $redux['footer-cprt-sec'] ?>
                        </span>
                        <span>
                            <?= $redux['footer-cprt-third'] ?>
                        </span>
                    </div>
                </div>
                <nav class="footer-wrap__menu">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                            )
                        );
                    ?>
                </nav>               
                <div class="footer-wrap__info">
                    <div class="footer-wrap__contacts">           
                        <a href="<?= $redux['contact-call-link'] ?>">
                            <?= $redux['contact-call-text'] ?>
                        </a>                        
                        <a href="<?= $redux['contact-email-link'] ?>">
                            <?= $redux['contact-email-text'] ?>
                        </a>
                    </div>
                    <div class="footer-wrap__social">            
                        <!--noindex-->
                        <a href="<?= $redux['footer-social-first-link'] ?>" rel="nofollow noopener noreferrer" target="_blank">
                            <img src="<?= $redux['footer-social-first-img']['url'] ?>">
                        </a>
                        <!--/noindex-->
                         <!--noindex-->
                         <a href="<?= $redux['footer-social-sec-link'] ?>" rel="nofollow noopener noreferrer" target="_blank">
                            <img src="<?= $redux['footer-social-sec-img']['url'] ?>">
                         </a>
                         <!--/noindex-->
                         <!--noindex-->
                         <a href="<?= $redux['footer-social-third-link'] ?>" rel="nofollow noopener noreferrer" target="_blank">
                            <img src="<?= $redux['footer-social-third-img']['url'] ?>">
                        </a>
                        <!--/noindex-->                        
                    </div>
                    <!--noindex-->
                    <a class="footer-wrap__pay" href="<?= $redux['footer-pay-link'] ?>" rel="nofollow noopener noreferrer" target="_blank">
                        <img src="<?= $redux['footer-pay-img']['url'] ?>" alt="">
                    </a>
                    <!--/noindex-->                 
                </div>                     
            </div>
        </div>
    </footer>   
<?php wp_footer(); ?>
</body>
</html>