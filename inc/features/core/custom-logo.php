<?php
/**
 * Sets up the WordPress core custom logo feature.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * Adds custom logo support.
 *
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#custom-logo
 * @return void
 */
function log_lolla_pro_theme_setup_custom_logo() {
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
