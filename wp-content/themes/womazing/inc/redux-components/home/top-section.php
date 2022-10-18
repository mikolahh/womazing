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
		'title'            => esc_html__( 'Верхняя секция', 'your-textdomain-here' ),
		'desc'             => 'Редактирование верхней секции главной страницы',
		'id'               => 'home-top-section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'home-top-section-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок  главной страницы', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Заголовок h1', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст заголовка', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-top-section-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст верхней секции', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'под заголовком', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-top-section-btn',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст кнопки верхней секции', 'your-textdomain-here' ),
				'subtitle' => esc_html__( '', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст кнопки', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-top-section-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на кнопку', 'your-textdomain-here' ),
				'subtitle' => esc_html__( '', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст ссылки', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'home-top-section-arrow-down',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Иконка стрелки', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Загрузите иконку .png (16x29 px)', 'your-textdomain-here' ),
				'subtitle'     => esc_html__( 'переход к нижней секции', 'your-textdomain-here' ),
				'preview_size' => 'full',
			),
			
			array(
				'id'           => 'home-top-section-main-image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Основное изображение верхней секции', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Загрузите изображение (оригинал - 410x646 px)', 'your-textdomain-here' ),
				'subtitle'     => esc_html__( 'большое фото', 'your-textdomain-here' ),
				'preview_size' => 'full',
			),
			array(
				'id'           => 'home-top-section-second-image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Дополнительное изображение верхней секции', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Загрузите изображение (оригинал - 197x197 px)', 'your-textdomain-here' ),
				'subtitle'     => esc_html__( 'верх основного фото', 'your-textdomain-here' ),
				'preview_size' => 'full',
			),
			array(
				'id'           => 'home-top-section-third-image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Дополнительное изображение верхней секции', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Загрузите изображение (оригинал - 190x318 px)', 'your-textdomain-here' ),
				'subtitle'     => esc_html__( 'низ основного фото', 'your-textdomain-here' ),
				'preview_size' => 'full',
			),
			
		),
	)
);
