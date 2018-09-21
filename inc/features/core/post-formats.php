<?php
/**
 * Sets up the WordPress core support for post formats.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * Enables the specific formats.
 *
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#post-formats
 * @return void
 */
function log_lolla_pro_theme_setup_post_formats() {
	add_theme_support(
		'post-formats',
		array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat',
		)
	);
}
