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
		'title'            => esc_html__( 'Команда мечты', 'your-textdomain-here' ),
		'desc'             => 'Редактирование секции "Команда мечты"',
		'id'               => 'home-dream-team-section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'home-dream-team-section-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок секции', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Заголовок h2', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст заголовка', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'home-dream-team-section-img-1',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Первая картинка слайдера', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Загрузите изображение .png (оригинал 729x487 px)', 'your-textdomain-here' ),
				'subtitle'     => esc_html__( '', 'your-textdomain-here' ),
				'preview_size' => 'full',
			),
			array(
				'id'           => 'home-dream-team-section-img-2',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Вторая картинка слайдера', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Загрузите изображение .png (оригинал 729x487 px)', 'your-textdomain-here' ),
				'subtitle'     => esc_html__( '', 'your-textdomain-here' ),
				'preview_size' => 'full',
			),
			array(
				'id'           => 'home-dream-team-section-img-3',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Третья картинка слайдера', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Загрузите изображение .png (оригинал 729x487 px)', 'your-textdomain-here' ),
				'subtitle'     => esc_html__( '', 'your-textdomain-here' ),
				'preview_size' => 'full',
			),
			array(
				'id'       => 'home-dream-team-section-subtitle',
				'type'     => 'text',
				'title'    => esc_html__( 'Подзаголовок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'инфо-блок', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-dream-team-section-subtext-first',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст 1', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'инфо-блок', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-dream-team-section-subtext-sec',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст 2', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'инфо-блок', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-dream-team-section-btn-text',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст ссылки', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'инфо-блок', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-dream-team-section-btn-link',
				'type'     => 'text',
				'title'    => esc_html__( 'URL ссылки', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'инфо-блок', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим url', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			
		),
	)
);