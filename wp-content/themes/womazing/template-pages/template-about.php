<?php 
    /*
     * Template name: Шаблон страницы 'О бренде'
     */
    get_header();
    global $redux;
 ?>
    <section class="about-header" id="about-header">
        <div class="container">                
            <h1 class="about-title page-title">
                <?= $redux['about-page-title'] ?>
            </h1>
            <div class="about-breadcrumb breadcrumb">
                <?php woocommerce_breadcrumb(); ?>
            </div>
        </div>
    </section>
    <section class="about-idea" id="about-idea">
        <div class="container">
            <div class="about-idea-wrap about-wrap">
                <div class="about-wrap__img">
                    <img src="<?= $redux['about-first-section-img']['url'] ?>">
                </div>
                <div class="about-wrap__info">
                    <h3 class="about-wrap__title subsection-title">
                        <?= $redux['about-first-section-title'] ?>
                    </h3>
                    <p class="about-wrap__text">
                        <?= $redux['about-first-section-text-first'] ?>
                    </p>
                    <p class="about-wrap__text">
                        <?= $redux['about-first-section-text-sec'] ?> 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="about-magic">
        <div class="container">
            <div class="about-magic-wrap about-wrap">                    
                <div class="about-wrap__info">
                    <h3 class="about-wrap__title subsection-title">
                        <?= $redux['about-sec-section-title'] ?>
                    </h3>
                    <p class="about-wrap__text">
                        <?= $redux['about-sec-section-text-first'] ?>
                    </p>
                    <p class="about-wrap__text">
                        <?= $redux['about-sec-section-text-sec'] ?> 
                    </p>
                </div>
                <div class="about-wrap__img">
                    <img src="<?= $redux['about-sec-section-img']['url'] ?>">
                </div>
            </div>
            <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>" class="about-btn btn-shop"><?= $redux['about-sec-section-btn-text'] ?>
            </a>                
        </div>
    </section>
 <?php
    get_footer();
  ?>