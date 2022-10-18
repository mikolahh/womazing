<?php
/**
 * Redux Framework typography config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined('ABSPATH') || exit;

Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__('Контакты', 'your-textdomain-here'),
        'id' => 'contact',
        'icon' => 'el el-align-center',
        'fields' => array(
            array(
                'id' => 'contact-call-text',
                'type' => 'text',
                'title' => esc_html__('Текст ссылки на звонок', 'your-textdomain-here'),
                'subtitle' => esc_html__( 'Видимая часть', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Вводим текст или номер в свободном формате', 'your-textdomain-here' ),
                'default' => 'Default Text'
            ),
            array(
                'id' => 'contact-call-link',
                'type' => 'text',
                'title' => esc_html__('Ссылка на звонок', 'your-textdomain-here'),
                'subtitle' => esc_html__( 'Содержание', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Вводим номер в формате ссылки', 'your-textdomain-here' ),
                'default' => 'Default Text'
            ),
            array(
                'id'       => 'contact-email-text',
                'type'     => 'text',
                'title'    => esc_html__( 'Текс ссылки на email', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Видимая часть', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Вводим текст или email в свободном формате', 'your-textdomain-here' ),
                'default'  => 'Default Text',
            ),
            array(
                'id'       => 'contact-email-link',
                'type'     => 'text',
                'title'    => esc_html__( 'Ссылка на email', 'your-textdomain-here' ),
                'subtitle' => esc_html__( 'Содержание', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Вводим email в формате ссылки', 'your-textdomain-here' ),
                'default'  => 'Default Text',
            ),
            array(
                'id'       => 'contact-address',
                'type'     => 'text',
                'title'    => esc_html__( 'Адрес', 'your-textdomain-here' ),
                'subtitle' => esc_html__( '', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Вводим адрес', 'your-textdomain-here' ),
                'default'  => 'Default Text',
            ),
        ),
    )
);
