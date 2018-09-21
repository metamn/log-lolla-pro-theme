<?php
/**
 * Sets up the WordPress core support for title tag.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * Enables plugins and themes to manage the document title tag.
 *
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
 * @return void
 */
function log_lolla_pro_theme_setup_title_tag() {
	add_theme_support( 'title-tag' );
}
