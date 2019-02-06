<?php
/**
 * Customizer functionality for Advanced Color customizations.
 *
 * @package Hestia
 * @since Hestia 1.0
 */

/**
 * Hook controls for Advanced Color Settings.
 *
 * @since Hestia 1.0
 */
function hestia_advanced_colors_customize_register( $wp_customize ) {

	if ( ! class_exists( 'Hestia_Customize_Alpha_Color_Control' ) ) {
		return;
	}

	$wp_customize->add_setting(
		'secondary_color', array(
			'default'           => '#2d3359',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'hestia_sanitize_colors',
		)
	);

	$wp_customize->add_control(
		new Hestia_Customize_Alpha_Color_Control(
			$wp_customize, 'secondary_color', array(
				'label'        => esc_html__( 'Secondary Color', 'hestia-pro' ),
				'section'      => 'colors',
				'show_opacity' => true,
				'palette'      => false,
			)
		)
	);

	$wp_customize->add_setting(
		'body_color', array(
			'default'           => '#999999',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'hestia_sanitize_colors',
		)
	);

	$wp_customize->add_control(
		new Hestia_Customize_Alpha_Color_Control(
			$wp_customize, 'body_color', array(
				'label'        => esc_html__( 'Body Text Color', 'hestia-pro' ),
				'section'      => 'colors',
				'show_opacity' => true,
				'palette'      => false,
			)
		)
	);

	$wp_customize->add_setting(
		'header_overlay_color', array(
			'default'           => 'rgba(0,0,0,0.5)',
			'sanitize_callback' => 'hestia_sanitize_colors',
		)
	);

	$wp_customize->add_control(
		new Hestia_Customize_Alpha_Color_Control(
			$wp_customize, 'header_overlay_color', array(
				'label'        => esc_html__( 'Header / Slider Overlay Color', 'hestia-pro' ),
				'section'      => 'colors',
				'show_opacity' => true,
				'palette'      => false,
			)
		)
	);

	$wp_customize->add_setting(
		'header_text_color', array(
			'default'           => '#fff',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'hestia_sanitize_colors',
		)
	);

	$wp_customize->add_control(
		new Hestia_Customize_Alpha_Color_Control(
			$wp_customize, 'header_text_color', array(
				'label'        => esc_html__( 'Header / Slider Text Color', 'hestia-pro' ),
				'section'      => 'colors',
				'show_opacity' => true,
				'palette'      => false,
			)
		)
	);

	$wp_customize->add_setting(
		'navbar_background_color', array(
			'default'           => '#fff',
			'sanitize_callback' => 'hestia_sanitize_colors',
		)
	);

	$wp_customize->add_control(
		new Hestia_Customize_Alpha_Color_Control(
			$wp_customize, 'navbar_background_color', array(
				'label'        => esc_html__( 'Navbar Background Color', 'hestia-pro' ),
				'section'      => 'colors',
				'show_opacity' => true,
				'palette'      => false,
			)
		)
	);

	$wp_customize->add_setting(
		'navbar_text_color', array(
			'default'           => '#555',
			'sanitize_callback' => 'hestia_sanitize_colors',
		)
	);

	$wp_customize->add_control(
		new Hestia_Customize_Alpha_Color_Control(
			$wp_customize, 'navbar_text_color', array(
				'label'        => esc_html__( 'Navbar Text Color', 'hestia-pro' ),
				'section'      => 'colors',
				'show_opacity' => true,
				'palette'      => false,
			)
		)
	);

	$wp_customize->add_setting(
		'navbar_transparent_text_color', array(
			'default'           => '#fff',
			'sanitize_callback' => 'hestia_sanitize_colors',
		)
	);

	$wp_customize->add_control(
		new Hestia_Customize_Alpha_Color_Control(
			$wp_customize, 'navbar_transparent_text_color', array(
				'label'        => esc_html__( 'Transparent Navbar Text Color', 'hestia-pro' ),
				'description'  => esc_html__( 'When navbar background is transparent', 'hestia-pro' ),
				'section'      => 'colors',
				'show_opacity' => true,
				'palette'      => false,
			)
		)
	);
}

add_action( 'customize_register', 'hestia_advanced_colors_customize_register' );

/**
 * Adds inline style from customizer
 *
 * @since Hestia 1.0
 */
function hestia_advanced_custom_colors_inline_style() {

	$color_headings    = get_theme_mod( 'secondary_color', '#2d3359' );
	$color_body        = get_theme_mod( 'body_color', '#999999' );
	$color_overlay     = get_theme_mod( 'header_overlay_color', 'rgba(0,0,0,0.5)' );
	$color_header_text = get_theme_mod( 'header_text_color', '#fff' );
	$color_nav_background = get_theme_mod( 'navbar_background_color', '#fff' );
	$color_nav_text = get_theme_mod( 'navbar_text_color', '#555' );
	$color_transparent_nav_text = get_theme_mod( 'navbar_transparent_text_color', '#fff' );
	$color_accent   = get_theme_mod( 'accent_color', '#e91e63' );

	$custom_css = '';

	if ( ! empty( $color_headings ) ) {

		// Secondary Color
		$custom_css .= '
.title, .title a, 
.card-title, 
.card-title a, 
.info-title, 
.info-title a, 
.footer-brand, 
.footer-brand a,
.media .media-heading, 
.media .media-heading a,
.hestia-info .info-title, 
.card-blog a.moretag,
.card-blog a.more-link,
.card .author a,
.hestia-about:not(.section-image) h1, .hestia-about:not(.section-image) h2, .hestia-about:not(.section-image) h3, .hestia-about:not(.section-image) h4, .hestia-about:not(.section-image) h5,
aside .widget h5,
aside .widget a {
	color: ' . esc_attr( $color_headings ) . ';
}';
	}

	if ( ! empty( $color_body ) ) {

		// Body Colors
		$custom_css .= '
.description, .card-description, .footer-big, .hestia-features .hestia-info p, .text-gray, .hestia-about:not(.section-image) p, .hestia-about:not(.section-image) h6, .woocommerce .product .card-product .card-description p {
	color: ' . esc_attr( $color_body ) . ';
}';
	}

	if ( ! empty( $color_overlay ) ) {

		// Header / Slider Overlay Colors
		$custom_css .= ' 
.header-filter:before {
	background-color: ' . esc_attr( $color_overlay ) . ';
}';
	}

	if ( ! empty( $color_header_text ) ) {

		// Header / Slider Overlay Colors
		$custom_css .= ' 
.page-header, .page-header .hestia-title, .page-header .sub-title {
	color: ' . esc_attr( $color_header_text ) . ';
}';
	}

	if ( ! empty( $color_nav_background ) ) {

		// Navbar background
		$custom_css .= ' 
.navbar, .navbar.navbar-default {
	background-color: ' . esc_attr( $color_nav_background ) . ';
}
.navbar.navbar-transparent {
	background-color: transparent;
}
@media( max-width: 768px ) {
    .navbar.navbar-transparent {
        background-color: rgba(0,0,0,0.8);
    }
}';
	}

	if ( ! empty( $color_nav_text ) ) {

		// Navbar Text
		$custom_css .= ' 
.navbar, .navbar.navbar-default {
	color: ' . esc_attr( $color_nav_text ) . ';
}';
	}

	if ( ! empty( $color_transparent_nav_text ) ) {

		// Transparent Navbar Text
		$custom_css .= ' 
.navbar.navbar-transparent {
	color: ' . esc_attr( $color_transparent_nav_text ) . ';
}';
	}

	if ( ! empty( $color_accent ) ) {

		// FORMS UNDERLINE COLOR
		$custom_css .= '.form-group.is-focused .form-control,
div.wpforms-container .wpforms-form .form-group.is-focused .form-control,
.nf-form-cont input:not([type=button]):focus,
.nf-form-cont select:focus,
.nf-form-cont textarea:focus, 
.woocommerce-cart .shop_table .actions .coupon .input-text:focus,
 .woocommerce-checkout #customer_details .input-text:focus, .woocommerce-checkout #customer_details select:focus, .woocommerce-checkout #order_review .input-text:focus, .woocommerce-checkout #order_review select:focus, .woocommerce-checkout .woocommerce-form .input-text:focus, .woocommerce-checkout .woocommerce-form select:focus, .woocommerce div.product form.cart .variations select:focus, .woocommerce .woocommerce-ordering select:focus {
background-image: -webkit-gradient(linear,left top, left bottom,from(' . esc_attr( $color_accent ) . '),to(' . esc_attr( $color_accent ) . ')),-webkit-gradient(linear,left top, left bottom,from(#d2d2d2),to(#d2d2d2));
	background-image: -webkit-linear-gradient(' . esc_attr( $color_accent ) . '),to(' . esc_attr( $color_accent ) . '),-webkit-linear-gradient(#d2d2d2,#d2d2d2);
	background-image: linear-gradient(' . esc_attr( $color_accent ) . '),to(' . esc_attr( $color_accent ) . '),linear-gradient(#d2d2d2,#d2d2d2);
}';
	}

	wp_add_inline_style( 'hestia_style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'hestia_advanced_custom_colors_inline_style', 20 );
