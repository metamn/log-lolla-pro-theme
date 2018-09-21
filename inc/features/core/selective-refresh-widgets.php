<?php
/**
 * Sets up the WordPress core support for selective refresh of widgets.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * Enables Selective Refresh for Widgets being managed within the Customizer.
 *
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
 * @return void
 */
function log_lolla_pro_theme_setup_selective_refresh_widgets() {
	add_theme_support( 'customize-selective-refresh-widgets' );
}
