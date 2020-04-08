<?php
/**
 * Custom hooks.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function understrap_site_info() {
		do_action( 'understrap_site_info' );
	}
}

if ( ! function_exists( 'understrap_add_site_info' ) ) {
	add_action( 'understrap_site_info', 'understrap_add_site_info' );

	/**
	 * Add site info content.
	 */
	function understrap_add_site_info() {
		$the_theme = wp_get_theme();
		$anno = date('Y');

		$site_info = sprintf(
			'<span class="copyrights">@ %1$s</span> %2$s <span class="sep"> | </span>%3$s',
			$anno,
			esc_html__( ' Trentaduemarzo srl', 'understrap' ),
			sprintf(
				/* translators:*/
				esc_html__( 'Realizzato con %1s & %2s', 'understrap' ),
				'<i class="fa fa-heart text-secondary"></i>',
				'<i class="fa fa-wordpress text-secondary" aria-hidden="true"></i>'
			)
		);

		echo apply_filters( 'understrap_site_info_content', $site_info ); // WPCS: XSS ok.
	}
}