<?php
/**
 * Sets up the theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */


if ( ! function_exists( 'log_lolla_pro_theme_scripts' ) ) :
	/**
	 * Enqueues scripts and styles
	 *
	 * @return void
	 */
	function log_lolla_pro_theme_scripts() {
		$timestamp = filemtime( get_template_directory() . '/style.css' );
		wp_enqueue_style( 'log-lolla-pro-theme-style', get_stylesheet_uri(), array(), $timestamp );

		$timestamp = filemtime( get_template_directory() . '/assets/js/log-lolla-pro-theme.js' );
		wp_enqueue_script( 'log-lolla-pro-theme', get_theme_file_uri( '/assets/js/log-lolla-pro-theme.js' ), array(), $timestamp );
	}
endif;
add_action( 'wp_enqueue_scripts', 'log_lolla_pro_theme_scripts' );
