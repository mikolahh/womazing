<?php 
    /*
     * Template name: Наш шаблон главной страницы
     */
    get_header();
    global $redux;
 ?>
        <section class="top" id="top">
            <div class="container">
                <div class="top-wrapper">
                    <div class="top-offer">
                        <div class="top-offer-slider">
                            <div class="top-offer-slider__item">
                                <h1 class="top-offer__title page-title">
                                <?= $redux['home-top-section-title'] ?>  
                                </h1>
                                <p class="top-offer__text">              
                                 <?= $redux['home-top-section-desc'] ?>
                                </p>                                
                            </div>
                            <div class="top-offer-slider__item">
                                <h1 class="top-offer__title page-title">
                                <?= $redux['home-top-section-title'] ?>  
                                </h1>
                                <p class="top-offer__text">              
                                 <?= $redux['home-top-section-desc'] ?>
                                </p>                                
                            </div>
                            <div class="top-offer-slider__item">
                                <h1 class="top-offer__title page-title">
                                <?= $redux['home-top-section-title'] ?>  
                                </h1>
                                <p class="top-offer__text">              
                                 <?= $redux['home-top-section-desc'] ?>
                                </p>                                
                            </div>
                        </div>                           
                            <div class="top-offer__buttons">                            
                                <a href="#new-coll" class="top-offer__btn-onw" id="top-offer__btn-onw">
                                    <img src="<?= $redux['home-top-section-arrow-down']['url'] ?>" alt="Перейти далее">
                                </a>                        
                                <a href="<?= $redux['home-top-section-link'] ?>" class="top-offer__btn-shop btn-shop">
                                    <?= $redux['home-top-section-btn'] ?>           
                                </a>
                            </div>                                      
                        <div class="top-offer__bullits">
                            <button type="button"></button>
                            <button type="button" class="active"></button>
                            <button type="button"></button>
                        </div>
                    </div>            
                    <div class="top-img" id="top-img">
                        <div class="top-img-slider">
                            <div class="top-img-slider__item">
                                <div class="top-img__main">
                                    <img src="<?= $redux['home-top-section-main-image']['url'] ?>">
                                </div>                               
                            </div>
                            <div class="top-img-slider__item">
                                <div class="top-img__main">
                                    <img src="<?= $redux['home-top-section-main-image']['url'] ?>">
                                </div>                               
                            </div>
                            <div class="top-img-slider__item">
                                <div class="top-img__main">
                                    <img src="<?= $redux['home-top-section-main-image']['url'] ?>">
                                </div>                               
                            </div>
                        </div>
                        <div class="top-img__first">
                            <img src="<?= $redux['home-top-section-second-image']['url'] ?>">                            
                        </div>
                        <div class="top-img__second">
                            <img src="<?= $redux['home-top-section-third-image']['url'] ?>">
                        </div>                       
                    </div>
                </div>
            </div>
        </section>    
        <section class="new-coll" id="new-coll">
            <div class="container">
                <div class="new-coll-offer">
                    <h2 class="new-coll-offer__title section-title">
                        <?= $redux['home-new-col-section-title'] ?>
                    </h2>                                       
                    <?php
                     echo do_shortcode('[recent_products per_page="3" columns="3"]');
                      ?>                                       
                    <a class="new-coll-offer__btn btn-shop btn-shop_ghost" href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">
                        <?= $redux['home-new-col-section-btn'] ?>
                    </a>
                </div>
            </div>
        </section>
        <section class="advantages">        
            <div class="container">
                <h2 class="advantages-title section-title">
                    <?= $redux['home-advantages-section-title'] ?>
                </h2>
                <div class="advantages-wrap">
                    <div class="advantage">
                        <img class="advantage__logo" src="<?= $redux['home-advantages-section-icon-first']['url'] ?>" alt="">
                        <h3 class="advantage__title">
                            <?= $redux['home-advantages-section-subtitle-first'] ?>
                        </h3>
                        <p class="advantage__text">
                            <?= $redux['home-advantages-section-subtext-first'] ?>
                        </p>
                    </div>
                    <div class="advantage">
                        <img class="advantage__logo" src="<?= $redux['home-advantages-section-icon-sec']['url'] ?>" alt="">
                        <h3 class="advantage__title">
                            <?= $redux['home-advantages-section-subtitle-sec'] ?>
                        </h3>
                        <p class="advantage__text">
                            <?= $redux['home-advantages-section-subtext-first'] ?>
                        </p>
                    </div>
                    <div class="advantage">
                        <img class="advantage__logo" src="<?= $redux['home-advantages-section-icon-third']['url'] ?>" alt="">
                        <h3 class="advantage__title">
                            <?= $redux['home-advantages-section-subtitle-third'] ?>
                        </h3>
                        <p class="advantage__text">
                            <?= $redux['home-advantages-section-subtext-first'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="dream-team">
            <div class="container">
                <h2 class="dream-team-title section-title">
                    <?= $redux['home-dream-team-section-title'] ?>
                </h2>
                <div class="dream-team-wrap">
                    <div class="dream-team-slider">                        
                        <div class="dream-team-slider__item">
                            <img src="<?= $redux['home-dream-team-section-img-1']['url'] ?>"> 
                        </div>
                        <div class="dream-team-slider__item">
                            <img src="<?= $redux['home-dream-team-section-img-2']['url'] ?>">  
                        </div>
                        <div class="dream-team-slider__item">
                            <img src="<?= $redux['home-dream-team-section-img-3']['url'] ?>"> 
                        </div>                                               
                    </div>
                    <div class="dream-team-offer">
                        <h3 class="dream-team-offer__title">
                            <?= $redux['home-dream-team-section-subtitle'] ?>
                        </h3>
                        <p class="dream-team-offer__text">
                            <?= $redux['home-dream-team-section-subtext-first'] ?>
                        </p>
                        <p class="dream-team-offer__text">
                            <?= $redux['home-dream-team-section-subtext-sec'] ?>
                        </p>
                        <a class="dream-team-offer__link" href="<?= $redux['home-dream-team-section-btn-link'] ?>">
                            <?= $redux['home-dream-team-section-btn-text'] ?>                       
                        </a>
                    </div>
                </div>
            </div>
        </section>
 <?php
    get_footer();
  ?>