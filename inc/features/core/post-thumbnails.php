<?php
/**
 * Sets up the WordPress core support for post thumbnails.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * Enables support for Post Thumbnails on posts, pages and custom post types.
 *
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
 * @return void
 */
function log_lolla_pro_theme_setup_post_thumbnails() {
	add_theme_support( 'post-thumbnails' );
}
