<?php
/**
 * Displays a link to the Summary archive
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

?>

<div class="link-with-prefix">
	<span class="prefix">
		<?php
		/* translators: The prefix for the link to the Summary archive. */
		echo esc_html_x( 'A&nbsp;', 'The prefix for the link to the Summary archive', 'log-lolla-pro-theme' );
		?>
	</span>

	<?php echo wp_kses_post( log_lolla_pro_theme_get_link_html( 'Summaries', 'Summary' ) ); ?>
</div>
