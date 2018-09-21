<?php
/**
 * Sets up the theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

if ( ! function_exists( 'log_lolla_pro_theme_theme_setup' ) ) :
	/**
	 * Loads custom feature setup functions.
	 */
	require get_template_directory() . '/inc/features/recommended-features.php';
	require get_template_directory() . '/inc/features/good-to-have-features.php';
	require get_template_directory() . '/inc/features/wordpress-org-features.php';

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Features are grouped by their use case.
	 * You can easily ungroup them, or create new groups, or include them individually.
	 *
	 * @return void
	 */
	function log_lolla_pro_theme_theme_setup() {
		log_lolla_pro_theme_recommended_features();
		log_lolla_pro_theme_good_to_have_features();
		log_lolla_pro_theme_wordpress_org_features();
	}
endif;
add_action( 'after_setup_theme', 'log_lolla_pro_theme_theme_setup' );

if ( ! function_exists( 'log_lolla_pro_theme_widgets_setup' ) ) :
	/**
	 * Loads custom widget setup functions.
	 */
	require get_template_directory() . '/inc/features/core/widget-areas.php';

	/**
	 * Sets up widgets.
	 *
	 * Widgets and widget areas are optional.
	 * You can remove any of them, or add your custom widget areas.
	 *
	 * @return void
	 */
	function log_lolla_pro_theme_widgets_setup() {
		log_lolla_pro_theme_setup_widget_areas();
	}
endif;
add_action( 'widgets_init', 'log_lolla_pro_theme_widgets_setup' );

if ( ! function_exists( 'log_lolla_pro_theme_scripts' ) ) :
	/**
	 * Enqueues scripts and styles.
	 */
	function log_lolla_pro_theme_scripts() {
		$timestamp = filemtime( get_template_directory() . '/style.css' );
		wp_enqueue_style( 'log-lolla-pro-theme-style', get_stylesheet_uri(), array(), $timestamp );

		wp_enqueue_script( 'jquery' );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		$timestamp = filemtime( get_template_directory() . '/assets/js/log-lolla-pro-theme.js' );
		wp_enqueue_script( 'log-lolla-pro-theme', get_theme_file_uri( '/assets/js/log-lolla-pro-theme.js' ), array(), $timestamp );
	}
endif;
add_action( 'wp_enqueue_scripts', 'log_lolla_pro_theme_scripts' );

/**
 * Load custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Load functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Load customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
