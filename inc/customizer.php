<?php
/**
 * Log Lolla Pro Theme Theme Customizer
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

/**
 * No-HTML sanitization callback example.
 *
 * - Sanitization: nohtml
 * - Control: text, textarea, password
 *
 * Sanitization callback for 'nohtml' type text inputs. This callback sanitizes `$nohtml`
 * to remove all HTML.
 *
 * NOTE: wp_filter_nohtml_kses() can be passed directly as `$wp_customize->add_setting()`
 * 'sanitize_callback'. It is wrapped in a callback here merely for example purposes.
 *
 * @see wp_filter_nohtml_kses() https://developer.wordpress.org/reference/functions/wp_filter_nohtml_kses/
 *
 * @param string $nohtml The no-HTML content to sanitize.
 * @return string Sanitized no-HTML content.
 */
function log_lolla_pro_theme_sanitize_nohtml( $nohtml ) {
	return wp_filter_nohtml_kses( $nohtml );
}


/**
 * Checkbox sanitization callback example.
 *
 * Sanitization callback for 'checkbox' type controls. This callback sanitizes `$checked`
 * as a boolean value, either TRUE or FALSE.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool Whether the checkbox is checked.
 */
function log_lolla_pro_theme_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true === $checked ) ? true : false );
}


/**
 * Add postMessage support for site title and description for the Theme Customizer.
 * Also add support for customizing the footer copyright and credits
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function log_lolla_pro_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_setting(
		'footer_copyright', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'theme_supports'    => '', // Rarely needed.
			'default'           => get_bloginfo( 'name' ),
			'transport'         => 'postMessage', // or postMessage.
			'sanitize_callback' => 'log_lolla_pro_theme_sanitize_nohtml',
		)
	);

	$wp_customize->add_control(
		'footer_copyright', array(
			'type'            => 'text',
			'priority'        => 10, // Within the section.
			'section'         => 'title_tagline', // Required, core or custom.
			/* translators: The label of the customizer on the admin screen. */
			'label'           => __( 'Copyright text in footer', 'log-lolla-pro-theme' ),
			'description'     => '',
			'active_callback' => 'is_front_page',
		)
	);

	$wp_customize->add_setting(
		'footer_copyright_link', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'theme_supports'    => '', // Rarely needed.
			'default'           => esc_url( home_url() ),
			'transport'         => 'postMessage', // or postMessage.
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'footer_copyright_link', array(
			'type'            => 'text',
			'priority'        => 10, // Within the section.
			'section'         => 'title_tagline', // Required, core or custom.
			/* translators: The label of the customizer on the admin screen. */
			'label'           => __( 'Copyright link in footer', 'log-lolla-pro-theme' ),
			'description'     => '',
			'active_callback' => 'is_front_page',
		)
	);

	$wp_customize->add_setting(
		'footer_copyright_display', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'theme_supports'    => '', // Rarely needed.
			'default'           => '1',
			'transport'         => 'postMessage', // or postMessage.
			'sanitize_callback' => 'log_lolla_pro_theme_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'footer_copyright_display', array(
			'type'            => 'checkbox',
			'priority'        => 10, // Within the section.
			'section'         => 'title_tagline', // Required, core or custom.
			/* translators: The label of the customizer on the admin screen. */
			'label'           => __( 'Display footer copyright', 'log-lolla-pro-theme' ),
			'description'     => '',
			'active_callback' => 'is_front_page',
		)
	);

	$wp_customize->add_setting(
		'footer_credits_display', array(
			'type'              => 'theme_mod',
			'capability'        => 'edit_theme_options',
			'theme_supports'    => '', // Rarely needed.
			'default'           => '1',
			'transport'         => 'postMessage', // or postMessage.
			'sanitize_callback' => 'log_lolla_pro_theme_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'footer_credits_display', array(
			'type'            => 'checkbox',
			'priority'        => 10, // Within the section.
			'section'         => 'title_tagline', // Required, core or custom.
			/* translators: The label of the customizer on the admin screen. */
			'label'           => __( 'Display footer credits', 'log-lolla-pro-theme' ),
			/* translators: The description of the customizer on the admin screen. */
			'description'     => __( 'Like Powered By Wordpress and the Log Lolla Pro Theme Theme', 'log-lolla-pro-theme' ),
			'active_callback' => 'is_front_page',
		)
	);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname', array(
				'selector'        => '.site-title a',
				'render_callback' => 'log_lolla_pro_theme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription', array(
				'selector'        => '.site-description',
				'render_callback' => 'log_lolla_pro_theme_customize_partial_blogdescription',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'footer_copyright', array(
				'selector'        => '.footer_copyright',
				'render_callback' => 'log_lolla_pro_theme_customize_partial_footer_copyright',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'footer_copyright_link', array(
				'selector'        => '.footer_copyright',
				'render_callback' => 'log_lolla_pro_theme_customize_partial_footer_copyright_link',
			)
		);
	}
}
add_action( 'customize_register', 'log_lolla_pro_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function log_lolla_pro_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function log_lolla_pro_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Render the footer copyright for the selective refresh partial.
 *
 * @return void
 */
function log_lolla_pro_theme_customize_partial_footer_copyright() {
	bloginfo( 'name' );
}


/**
 * Render the footer copyright link for the selective refresh partial.
 *
 * @return void
 */
function log_lolla_pro_theme_customize_partial_footer_copyright_link() {
	esc_url( home_url() );
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function log_lolla_pro_theme_customize_preview_js() {
	wp_enqueue_script( 'log-lolla-pro-theme-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'log_lolla_pro_theme_customize_preview_js' );
