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
		'title'            => esc_html__( 'Социальные сети', 'your-textdomain-here' ),
		'desc'             => 'Ссылки на соцсети, прочее',
		'id'               => 'footer-social',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(		

			array(
				'id'       => 'footer-social-first-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Первая социальная сеть', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим ссылку', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'footer-social-first-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Иконка', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Загрузите иконку .png (оригинал 22x23 px)', 'your-textdomain-here' ),
				'subtitle'     => esc_html__( 'Первая социальная сеть', 'your-textdomain-here' ),
				'preview_size' => 'full',
			),
			array(
				'id'       => 'footer-social-sec-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Вторая социальная сеть', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим ссылку', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'footer-social-sec-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Иконка', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Загрузите иконку .png (оригинал 21x21 px)', 'your-textdomain-here' ),
				'subtitle'     => esc_html__( 'Вторая социальная сеть', 'your-textdomain-here' ),
				'preview_size' => 'full',
			),
			array(
				'id'       => 'footer-social-third-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Третья социальная сеть', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим ссылку', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),		
			
			array(
				'id'           => 'footer-social-third-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Иконка', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Загрузите иконку .png (оригинал 23x19 px)', 'your-textdomain-here' ),
				'subtitle'     => esc_html__( 'Третья социальная сеть', 'your-textdomain-here' ),
				'preview_size' => 'full',
			),
			array(
				'id'       => 'footer-pay-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Платежи', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Ссылка', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Вводим ссылку', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'footer-pay-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Платежные системы', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Загрузите иконку .png (оригинал 68x22 px)', 'your-textdomain-here' ),
				'subtitle'     => esc_html__( 'Иконка', 'your-textdomain-here' ),
				'preview_size' => 'full',
			),
			
		),
	)
);