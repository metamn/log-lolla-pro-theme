<?php
/**
 * Sets up the WordPress core support for atomatic RSS links.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * Enables Automatic Feed Links for post and comment in the head.
 *
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#feed-links
 * @return void
 */
function log_lolla_pro_theme_setup_rss_links() {
	add_theme_support( 'automatic-feed-links' );
}
