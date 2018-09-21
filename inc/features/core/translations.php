<?php
/**
 * Makes theme available for translation.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * Loads the theme’s translated strings.
 *
 * @link https://developer.wordpress.org/reference/functions/load_theme_textdomain/
 * @return void
 */
function log_lolla_pro_theme_setup_translation() {
	load_theme_textdomain( 'log-lolla-pro-theme', get_template_directory() . '/languages' );
}
