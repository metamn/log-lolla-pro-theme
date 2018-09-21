<?php
/**
 * Sets up the WordPress core navigation menu support.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * Registers navigation menu locations for a theme.
 *
 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
 * @return void
 */
function log_lolla_pro_theme_setup_navigation_menus() {
	register_nav_menus(
		array(
			/* translators: The primary menu name */
			'menu-1' => esc_html_x( 'Primary', 'The primary menu name', 'log-lolla-pro-theme' ),
		)
	);
}
