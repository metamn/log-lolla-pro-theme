<?php
/**
 * Sets up the WordPress core custom content width feature.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * Sets the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
 *
 * @link https://codex.wordpress.org/Content_Width
 * @return void
 */
function log_lolla_pro_theme_setup_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'log_lolla_pro_theme_content_width', 640 );
}
