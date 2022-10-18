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
		'title'            => esc_html__( 'Новая коллекция', 'your-textdomain-here' ),
		'desc'             => 'Редактирование секции "Новая коллекция"',
		'id'               => 'home-new-col-section',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'home-new-col-section-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок секции', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Заголовок h2', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст заголовка', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-new-col-section-btn',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст кнопки', 'your-textdomain-here' ),
				'subtitle' => esc_html__( '', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст кнопки', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-new-col-section-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на кнопку', 'your-textdomain-here' ),
				'subtitle' => esc_html__( '', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим текст ссылки', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
		),
	)
);
