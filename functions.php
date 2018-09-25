<?php
/**
 * Sets up the theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

if (! function_exists(' log_lolla_pro_theme_styles' ) ) {
	/**
	 * Loads parent and child styles.
	 *
	 * @return void
	 */
	function log_lolla_pro_theme_styles() {
		$parent_style = 'parent-style';

        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

		wp_enqueue_style( 'child-style',
            get_stylesheet_directory_uri() . '/style.css',
            array( $parent_style ),
            wp_get_theme()->get('Version')
        );
	}
}
add_action( 'wp_enqueue_scripts', 'log_lolla_pro_theme_styles' );

if ( ! function_exists( 'log_lolla_pro_theme_scripts' ) ) :
	/**
	 * Enqueues scripts.
	 *
	 * @return void
	 */
	function log_lolla_pro_theme_scripts() {
		$timestamp = filemtime( get_template_directory() . '/assets/js/log-lolla-pro-theme.js' );
		wp_enqueue_script( 'log-lolla-pro-theme', get_theme_file_uri( '/assets/js/log-lolla-pro-theme.js' ), array(), $timestamp );
	}
endif;
add_action( 'wp_enqueue_scripts', 'log_lolla_pro_theme_scripts' );
