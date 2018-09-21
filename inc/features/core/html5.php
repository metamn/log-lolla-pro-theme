<?php
/**
 * Sets up the WordPress core HTML5 markup feature.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * Switches default core markup for search form, comment form, and comments to output valid HTML5
 *
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
 * @return void
 */
function log_lolla_pro_theme_setup_html5() {
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
