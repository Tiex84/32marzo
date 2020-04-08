<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		// Get the Google Fonts from customizer
		$headings_font = esc_html(get_theme_mod('slovo_headings_fonts'));
		$body_font = esc_html(get_theme_mod('slovo_body_fonts'));
		if( $headings_font ) {
			wp_enqueue_style( 'slovo-headings-fonts', '//fonts.googleapis.com/css?family='. $headings_font );
		} else {
			wp_enqueue_style( 'slovo-source-sans', '//fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');
		}
		if( $body_font ) {
			wp_enqueue_style( 'slovo-body-fonts', '//fonts.googleapis.com/css?family='. $body_font );
		} else {
			wp_enqueue_style( 'slovo-source-body', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,700,600');
		}

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
