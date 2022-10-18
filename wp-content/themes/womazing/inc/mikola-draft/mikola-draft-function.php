<?php 

add_action('wp_footer', 'mikola_wp_footer');
function mikola_wp_footer() {
if (is_product()) {
     echo 'Это экшн mikola_wp_footer';
} }
remove_action('wp_footer', 'mikola_wp_footer');



add_filter('the_content', 'mikola_before_text');
function mikola_before_text($mikola_content) {
    return 'это содержимое моего первого фильтра, которое типа выводится перед каким-то контентом' . $mikola_content;
};
remove_filter('the_content', 'mikola_before_text');