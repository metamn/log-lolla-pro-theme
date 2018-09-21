<?php
/**
 * Sets up the WordPress core widget areas support.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * Registers widget areas for a theme.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 * @return void
 */
function log_lolla_pro_theme_setup_widget_areas() {
	register_sidebar(
		array(
			/* translators: The name of the Header Menu widget area */
			'name'          => esc_html_x( 'Header Menu', 'The name of the Header Menu widget area', 'log-lolla-pro-theme' ),
			'id'            => 'sidebar-2',
			/* translators: The description of the Header Menu widget area */
			'description'   => esc_html_x( 'Add widgets here.', 'The description of the Header Menu widget area', 'log-lolla-pro-theme' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			/* translators: The name of the Sidebar widget area */
			'name'          => esc_html_x( 'Sidebar', 'The name of the Sidebar widget area', 'log-lolla-pro-theme' ),
			'id'            => 'sidebar-1',
			/* translators: The description of the Sidebar widget area */
			'description'   => esc_html_x( 'Add widgets here.', 'The description of the Sidebar widget area', 'log-lolla-pro-theme' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
