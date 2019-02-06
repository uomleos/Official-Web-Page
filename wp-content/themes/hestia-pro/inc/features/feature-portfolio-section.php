<?php
/**
 * Customizer functionality for the Portfolio section.
 *
 * @package Hestia
 * @since Hestia 1.0
 */

/**
 * Hook controls for Portfolio section to Customizer.
 *
 * @since Hestia 1.0
 */
function hestia_portfolio_customize_register( $wp_customize ) {

	$portfolio_enabled = hestia_jetpack_portfolio_configured();
	if ( $portfolio_enabled === false ) {
		return;
	}

	$selective_refresh = isset( $wp_customize->selective_refresh ) ? true : false;

	$wp_customize->add_section(
		'hestia_portfolio', array(
			'title' => esc_html__( 'Portfolio', 'hestia-pro' ),
			'panel' => 'hestia_frontpage_sections',
			'priority' => apply_filters( 'hestia_section_priority', 25, 'hestia_portfolio' ),
		)
	);

	$wp_customize->add_setting(
		'hestia_portfolio_hide', array(
			'sanitize_callback' => 'hestia_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'hestia_portfolio_hide', array(
			'type' => 'checkbox',
			'label' => esc_html__( 'Disable section','hestia-pro' ),
			'section' => 'hestia_portfolio',
			'priority' => 1,
		)
	);

	$wp_customize->add_setting(
		'hestia_portfolio_title', array(
			'default' => esc_html__( 'Portfolio', 'hestia-pro' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh ? 'postMessage' : 'refresh',
		)
	);

	$wp_customize->add_control(
		'hestia_portfolio_title', array(
			'label' => esc_html__( 'Section Title', 'hestia-pro' ),
			'section' => 'hestia_portfolio',
			'priority' => 5,
		)
	);

	$wp_customize->add_setting(
		'hestia_portfolio_subtitle', array(
			'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'hestia-pro' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh ? 'postMessage' : 'refresh',
		)
	);

	$wp_customize->add_control(
		'hestia_portfolio_subtitle', array(
			'label' => esc_html__( 'Section Subtitle', 'hestia-pro' ),
			'section' => 'hestia_portfolio',
			'priority' => 10,
		)
	);

	$wp_customize->add_setting(
		'hestia_portfolio_items', array(
			'default' => 3,
			'sanitize_callback' => 'absint',
			'transport'         => $selective_refresh ? 'postMessage' : 'refresh',
		)
	);

	$wp_customize->add_control(
		'hestia_portfolio_items', array(
			'label' => esc_html__( 'Number of Items', 'hestia-pro' ),
			'section' => 'hestia_portfolio',
			'priority' => 15,
			'type' => 'number',
		)
	);

	$wp_customize->add_setting(
		'hestia_portfolio_boxes_type', array(
			'default' => false,
			'sanitize_callback' => 'hestia_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'hestia_portfolio_boxes_type', array(
			'label' => esc_html__( 'Enable big boxes?', 'hestia-pro' ),
			'description' => esc_html__( 'You must have more then 3 portfolio items displayed in this section in order to see the difference.','hestia-pro' ),
			'section' => 'hestia_portfolio',
			'priority' => 20,
			'type' => 'checkbox',
		)
	);

}

add_action( 'customize_register', 'hestia_portfolio_customize_register' );


/**
 * Add selective refresh for portfolio section controls.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @since 1.1.31
 * @access public
 */
function hestia_register_portfolio_partials( $wp_customize ) {

	// Abort if selective refresh is not available.
	if ( ! isset( $wp_customize->selective_refresh ) ) {
		return;
	}

	$wp_customize->selective_refresh->add_partial(
		'hestia_portfolio_title', array(
			'selector'        => '.hestia-work .title',
			'settings'        => 'hestia_portfolio_title',
			'render_callback' => 'hestia_portfolio_title_callback',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'hestia_portfolio_subtitle', array(
			'selector'        => '.hestia-work .description',
			'settings'        => 'hestia_portfolio_subtitle',
			'render_callback' => 'hestia_portfolio_subtitle_callback',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'hestia_portfolio_items', array(
			'selector' => '.hestia-portfolio-content',
			'settings' => 'hestia_portfolio_items',
			'render_callback' => 'hestia_portfolio_content_callback',
		)
	);

}
add_action( 'customize_register', 'hestia_register_portfolio_partials' );

/**
 * Render callback function for portfolio section title selective refresh
 *
 * @since 1.1.31
 * @access public
 * @return string
 */
function hestia_portfolio_title_callback() {
	return get_theme_mod( 'hestia_portfolio_title' );
}

/**
 * Render callback function for portfolio section subtitle selective refresh
 *
 * @since 1.1.31
 * @access public
 * @return string
 */
function hestia_portfolio_subtitle_callback() {
	return get_theme_mod( 'hestia_portfolio_subtitle' );
}
/**
 * Callback for Jetpack portfolio customizer controls.
 *
 * @return bool
 */
function hestia_jetpack_portfolio_configured() {
	if ( class_exists( 'Jetpack' ) ) {

		if ( Jetpack::is_module_active( 'custom-content-types' ) && ( post_type_exists( 'jetpack-portfolio' ) ) ) {
			return true;
		}
	}
	return false;
}

/**
 * Callback function for portfolio content selective refresh.
 *
 * @since 1.1.31
 * @access public
 */
function hestia_portfolio_content_callback() {
	$hestia_portfolio_items = get_theme_mod( 'hestia_portfolio_items' );
	$hestia_portfolio_boxes_type = get_theme_mod( 'hestia_portfolio_boxes_type' );
	hestia_portfolio_content( $hestia_portfolio_items, $hestia_portfolio_boxes_type, true );
}
