<?php
/**
 * Sets up good to have features.
 *
 * Good to have features should be enabled only when they are necessary for the theme.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * Loads good to have features.
 */
require get_template_directory() . '/inc/features/core/post-thumbnails.php';
require get_template_directory() . '/inc/features/core/post-formats.php';

/**
 * Includes good to have features.
 *
 * @return void
 */
function log_lolla_pro_theme_good_to_have_features() {
	log_lolla_pro_theme_setup_post_thumbnails();
	log_lolla_pro_theme_setup_post_formats();
}
