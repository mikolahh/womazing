<?php
/**
 * womazing functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package womazing
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
// Подключаем настройки темы, вынесенные нами в отдельный файл my-womazing-settings.php
require get_template_directory() . '/inc/my-womazing-settings.php';

// Подключаем виджеты, вынесенные в отдельный файл
require get_template_directory() . '/inc/widget-areas.php';


// Load scripts and styles
require get_template_directory() . '/inc/enqueue-script-style.php';

// Учебно-тренировочные материалы, не относящиеся к проекту
require get_template_directory() . '/inc/mikola-draft/mikola-draft-function.php';



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
// Load redux settings redux-config.php
require get_template_directory() . '/inc/redux-config.php';

// Load custom woocommerce settings
require get_template_directory() . '/inc/woocommerce/woo.php';

// Load helpers.php
require get_template_directory() . '/inc/helpers.php';






   








