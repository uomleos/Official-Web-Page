<?php
//----------------------------------------------------------------------------------
// Load scripts and stylesheets for the front-end
//----------------------------------------------------------------------------------
if ( ! function_exists( ( 'ct_startup_blog_load_scripts_styles' ) ) ) {
	function ct_startup_blog_load_scripts_styles() {

		wp_enqueue_style( 'ct-startup-blog-google-fonts', '//fonts.googleapis.com/css?family=Montserrat:400|Source+Sans+Pro:400,400italic,700' );
		wp_enqueue_script( 'ct-startup-blog-js', get_template_directory_uri() . '/js/build/production.min.js', array( 'jquery' ), '', true );
		wp_localize_script( 'ct-startup-blog-js', 'objectL10n', array(
			'openMenu'         => esc_html__( 'open menu', 'startup-blog' ),
			'closeMenu'        => esc_html__( 'close menu', 'startup-blog' ),
			'openChildMenu'    => esc_html__( 'open dropdown menu', 'startup-blog' ),
			'closeChildMenu'   => esc_html__( 'close dropdown menu', 'startup-blog' ),
			'autoRotateSlider' => get_theme_mod( 'slider_auto_rotate' ),
			'sliderTime'       => get_theme_mod( 'slider_time' )
		) );
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css' );
		wp_enqueue_style( 'ct-startup-blog-style', get_stylesheet_uri() );

		// enqueue comment-reply script only on posts & pages with comments open ( included in WP core )
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'ct_startup_blog_load_scripts_styles' );

//----------------------------------------------------------------------------------
// Load stylesheet for the theme options page
//----------------------------------------------------------------------------------
if ( ! function_exists( ( 'ct_startup_blog_enqueue_admin_styles' ) ) ) {
	function ct_startup_blog_enqueue_admin_styles( $hook ) {

		if ( $hook == 'appearance_page_startup-blog-options' ) {
			wp_enqueue_style( 'ct-startup-blog-admin-styles', get_template_directory_uri() . '/styles/admin.min.css' );
		}
	}
}
add_action( 'admin_enqueue_scripts', 'ct_startup_blog_enqueue_admin_styles' );

//----------------------------------------------------------------------------------
// Load script and stylesheet for Customizer
//----------------------------------------------------------------------------------
if ( ! function_exists( ( 'ct_startup_blog_enqueue_customizer_scripts' ) ) ) {
	function ct_startup_blog_enqueue_customizer_scripts() {
		wp_enqueue_style( 'ct-startup-blog-customizer-styles', get_template_directory_uri() . '/styles/customizer.min.css' );
		wp_enqueue_script( 'ct-startup-blog-customizer-js', get_template_directory_uri() . '/js/build/customizer.min.js', array( 'jquery' ), '', true );
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css' );
	}
}
add_action( 'customize_controls_enqueue_scripts', 'ct_startup_blog_enqueue_customizer_scripts' );

//----------------------------------------------------------------------------------
// Load script for postMessage support in Customizer
//----------------------------------------------------------------------------------
if ( ! function_exists( ( 'ct_startup_blog_enqueue_customizer_post_message_scripts' ) ) ) {
	function ct_startup_blog_enqueue_customizer_post_message_scripts() {
		wp_enqueue_script( 'ct-startup-blog-customizer-post-message-js', get_template_directory_uri() . '/js/build/postMessage.min.js', array( 'jquery' ), '', true );
	}
}
add_action( 'customize_preview_init', 'ct_startup_blog_enqueue_customizer_post_message_scripts' );