
<?php 
    /*
     * Template name: Шаблон страницы 'Контакты'
     */
    get_header();
    global $redux;
 ?>
    <section class="contact-header">
        <div class="container">
            <h1 class="contact-title page-title">
                Контакты
            </h1>
            <div class="contact-breadcrumb breadcrumb">
                <?php woocommerce_breadcrumb(); ?>         
            </div>               
        </div>
    </section>
    <section class="contact-map">
        <div class="container">
            <div class="contact-map-wrap">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab7225569762085e1bb9be5cfd7c32161b8e794aa0141d52d939ecd64e0c23c71&amp;width=100%25&amp;height=476&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </section>
    <section class="contact-main" id="contact-main">
        <div class="container">
            <div class="contact-main-wrap">
                <div class="contact-wrap__phone">
                    <span>
                        Телефон
                    </span>
                    <a href="<?= $redux['contact-call-link'] ?>">
                        <?= $redux['contact-call-text'] ?>
                    </a>    
                </div>
                <div class="contact-wrap__email">
                    <span>
                        E-mail
                    </span>
                    <a href="<?= $redux['contact-email-link'] ?>">
                        <?= $redux['contact-email-text'] ?>
                    </a>                        
                </div>
                <div class="contact-wrap__address">
                    <span>
                        Адрес
                    </span>
                    <h4>
                        <?= $redux['contact-address'] ?>
                    </h4>                            
                </div>
            </div>
        </div>
    </section>
    <section class="contact-write">
        <div class="container"> 
            <h3 class="contact-write-title subsection-title">
                        Напишите нам
            </h3>  
        <?php echo do_shortcode('[contact-form-7 id="655" title="Contact form 1"]') ?>         
            
        </div>
    </section>
 

 <?php
    get_footer();
  ?>