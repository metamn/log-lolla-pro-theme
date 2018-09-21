<?php
/**
 * Sets up the WordPress core custom background feature.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * Adds theme background color and image support.
 *
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#custom-background
 * @return void
 */
function log_lolla_pro_theme_setup_custom_background() {
	add_theme_support(
		'custom-background',
		apply_filters( 'log_lolla_pro_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
}
