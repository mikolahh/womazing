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
		'title'            => esc_html__( 'Вторая секция', 'your-textdomain-here' ),
		'desc'             => 'Редактирование второй секции',
		'id'               => 'about-sec-section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(		

			array(
				'id'       => 'about-sec-section-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок второй секции', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Заголовок h3', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст заголовка', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'about-sec-section-text-first',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст 1', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Вторая секция', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'about-sec-section-text-sec',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст 2', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Вторая секция', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'about-sec-section-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Изображение', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Загрузите изображение .png (оригинал 442x547 px)', 'your-textdomain-here' ),
				'subtitle'     => esc_html__( 'Вторая секция', 'your-textdomain-here' ),
				'preview_size' => 'full',
			),
			array(
				'id'       => 'about-sec-section-btn-text',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст кнопки-ссылки', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Под второй секцией', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'about-sec-section-btn-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка для кнопки-ссылки', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'URL', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим ', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),

			
		),
	)
);