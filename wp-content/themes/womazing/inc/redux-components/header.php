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
        'title' => esc_html__('Шапка', 'your-textdomain-here'),
        'id' => 'header',
        'icon' => 'el el-align-center',
        'fields' => array(
            array(
                'id'           => 'header-bag-icon',
                'type'         => 'media',
                'url'          => true,
                'title'        => esc_html__( 'Иконка корзины', 'your-textdomain-here' ),
                'compiler'     => 'true',
                'desc'         => esc_html__( 'Загрузите изображение .png (оригинал 24x24 px)', 'your-textdomain-here' ),
                'subtitle'     => esc_html__( '', 'your-textdomain-here' ),
                'preview_size' => 'full',
            ),
            
        ),
    )
);
