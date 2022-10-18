<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'            => esc_html__( 'Блок copyright', 'your-textdomain-here' ),
        'desc'             => 'Редактирование блока copyright',
        'id'               => 'footer-cprt',
        'subsection'       => true,
        'customizer_width' => '700px',
        'fields'           => array(
            array(
                'id'       => 'footer-cprt-first',
                'type'     => 'text',
                'title'    => esc_html__( 'Первая строка', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
                'default'  => 'Default Text',
            ),             
            array(
                'id'       => 'footer-cprt-sec',
                'type'     => 'text',
                'title'    => esc_html__( 'Вторая строка', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
                'default'  => 'Default Text',
            ),
            array(
                'id'       => 'footer-cprt-third',
                'type'     => 'text',
                'title'    => esc_html__( 'Третья строка', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
                'default'  => 'Default Text',
            ),

            
        ),
    )
);