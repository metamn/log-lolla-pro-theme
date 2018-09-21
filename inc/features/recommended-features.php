<?php
/**
 * Sets up recommended features.
 *
 * Recommended features should be always enabled.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * Loads good to have features.
 */
require get_template_directory() . '/inc/features/core/translations.php';
require get_template_directory() . '/inc/features/core/rss-links.php';
require get_template_directory() . '/inc/features/core/html5.php';

/**
 * Includes recommended features.
 *
 * @return void
 */
function log_lolla_pro_theme_recommended_features() {
	log_lolla_pro_theme_setup_translation();
	log_lolla_pro_theme_setup_rss_links();
	log_lolla_pro_theme_setup_html5();
}
