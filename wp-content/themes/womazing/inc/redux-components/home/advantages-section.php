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
		'title'            => esc_html__( 'Преимущества', 'your-textdomain-here' ),
		'desc'             => 'Редактирование секции "Преимущества"',
		'id'               => 'home-advantages-section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'home-advantages-section-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок секции', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Заголовок h2', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст заголовка', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'home-advantages-section-icon-first',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Иконка 1', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Загрузите иконку .png (оригинал 61x61 px)', 'your-textdomain-here' ),
				'subtitle'     => esc_html__( 'Первая подсекция', 'your-textdomain-here' ),
				'preview_size' => 'full',
			),
			array(
				'id'       => 'home-advantages-section-subtitle-first',
				'type'     => 'text',
				'title'    => esc_html__( 'Подзаголовок 1', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Первая подсекция', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-advantages-section-subtext-first',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст 1', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Первая подсекция', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'home-advantages-section-icon-sec',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Иконка 2', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Загрузите иконку .png (оригинал 61x63 px)', 'your-textdomain-here' ),
				'subtitle'     => esc_html__( 'Вторая подсекция', 'your-textdomain-here' ),
				'preview_size' => 'full',
			),
			array(
				'id'       => 'home-advantages-section-subtitle-sec',
				'type'     => 'text',
				'title'    => esc_html__( 'Подзаголовок 2', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Вторая подсекция', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-advantages-section-subtext-sec',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст 2', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Вторая подсекция', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'home-advantages-section-icon-third',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Иконка 3', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Загрузите иконку .png (оригинал 57x57 px)', 'your-textdomain-here' ),
				'subtitle'     => esc_html__( 'Третья подсекция', 'your-textdomain-here' ),
				'preview_size' => 'full',
			),
			array(
				'id'       => 'home-advantages-section-subtitle-third',
				'type'     => 'text',
				'title'    => esc_html__( 'Подзаголовок 3', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Третья подсекция', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-advantages-section-subtext-third',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст 3', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Третья подсекция', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			
		),
	)
);