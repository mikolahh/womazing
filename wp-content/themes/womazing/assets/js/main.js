"use strict"
document.addEventListener('DOMContentLoaded', function() {

  // Делаем header непрозрачным при вертикальном скролле более 50px
const header = document.getElementById('header');
window.addEventListener('scroll', () => {
  if (pageYOffset > 50) {
      header.classList.add('white');        
  } else {
      header.classList.remove('white');        
  }
});

    

}); 

       // Код на jquery
  $(document).ready(function() {

    //Добавляем html элементы для работы overlay     
    $('ul.products>li.product>a').prepend('<div class="products-item-overlay"><span></span></div>');

    // Делаем плавную прокрутку к следующей секции
    $(document).on("click", "#top-offer__btn-onw", function(e) {        
        e.preventDefault();
        var id  = $(this).attr('href');       
        var top = $(id).offset().top - 80; // получаем координаты блока        
        $('body, html').animate({scrollTop: top}, 800); // плавно переходим к блоку
    });

    // Modal window
    $('.header-nav__callback').on('click', function () {
        $('.callback-modal').fadeIn();
      })
      $('.callback-modal__form').on('click', function () {
        $('.callback-modal').fadeOut();
      })
      $('.callback-modal__overlay').on('click', function () {
        $('.callback-modal').fadeOut();
      })
      $('.callback-modal__close').on('click', function () {
        $('.callback-modal').fadeOut();
      })
      $('.callback-modal__btn').on('click', function () {
        $('.callback-modal').fadeOut();
        $('.callback-success').fadeIn();
      })     
      $('.callback-modal__form').children().on('click', function (e) {      
        e.stopPropagation();
      })
      $('.callback-success__window').on('click', function () {
        $('.callback-success').fadeOut();
      })
      $('.callback-success__overlay').on('click', function () {
        $('.callback-success').fadeOut();
      })

      // Menu burger
      $('.header-nav__burger').click(function(event) {
        $('.header-nav__burger, .header-nav__menu').toggleClass('show-menu');  
      })
      // Dream-team-slider
      $('.dream-team-slider').slick(
        {
          dots: true,
          speed: 1000,
          autoplay: true,
          autoplaySpeed: 4000,
        }
      );
      // Top-offer slider
      $('.top-offer-slider').slick({
        arrows: false,
        dots:true,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 1000,
        asNavFor: '.top-img-slider',
      })
      // Top-img-slider
      $('.top-img-slider').slick({
        arrows: false,        
        speed: 1000,
        asNavFor: '.top-offer-slider',
      })

      // Change attr. type in input on page single product and cart
      $('.one-item .quantity .input-text.qty.text').attr('type', 'text');
      $('.cart-main .quantity .input-text.qty.text').attr('type', 'text');

      // Change attr. placeholder in textarea on page checkout
       $('.checkout-main .woocommerce-input-wrapper textarea').attr('placeholder', '');

      


  });




    
