<?php
/**
 * Sets up features required for Wordpress.org Theme Store.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * Loads Wordpress.org features.
 */
require get_template_directory() . '/inc/features/core/title-tag.php';
require get_template_directory() . '/inc/features/core/navigation-menus.php';
require get_template_directory() . '/inc/features/core/custom-background.php';
require get_template_directory() . '/inc/features/core/selective-refresh-widgets.php';
require get_template_directory() . '/inc/features/core/editor-styling.php';
require get_template_directory() . '/inc/features/core/custom-logo.php';
require get_template_directory() . '/inc/features/core/content-width.php';
require get_template_directory() . '/inc/features/core/custom-header.php';
require get_template_directory() . '/inc/features/third-party/jetpack.php';


/**
 * Includes good to have features.
 *
 * @return void
 */
function log_lolla_pro_theme_wordpress_org_features() {
	log_lolla_pro_theme_setup_title_tag();
	log_lolla_pro_theme_setup_navigation_menus();
	log_lolla_pro_theme_setup_custom_background();
	log_lolla_pro_theme_setup_selective_refresh_widgets();
	log_lolla_pro_theme_setup_editor_styling();
	log_lolla_pro_theme_setup_custom_logo();
	log_lolla_pro_theme_setup_content_width();
	log_lolla_pro_theme_setup_custom_header();
	log_lolla_pro_theme_setup_jetpack();
}
