<?php
/**
 * Sets up the WordPress core custom editor stylesheets feature.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * Adds callback for custom TinyMCE editor stylesheets.
 *
 * @link https://developer.wordpress.org/reference/functions/add_editor_style/
 * @return void
 */
function log_lolla_pro_theme_setup_editor_styling() {
	add_editor_style();
}
