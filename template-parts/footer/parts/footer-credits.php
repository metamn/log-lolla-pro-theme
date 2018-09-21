<?php
/**
 * Displays the credits in the footer.
 *
 * Displaying the credits can be switched on/off in the Administration screen.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

if ( get_theme_mod( 'footer_credits_display' ) ) {
	?>
	<aside class="footer-credits">
		<h3 class="hidden">Footer credits</h3>

		<div class="text">
			<div class="powered-by">
				<?php
				printf(
					/* translators: The `Powered by` text in the footer. */
					esc_html__( 'powered by %1$s', 'log-lolla-pro-theme' ),
					'<a class="link" href="https://wordpress.org/" title="WordpPess">WordPress</a>'
				);
				?>
			</div>

			<div class="theme-by">
				<?php
				printf(
					/* translators: The `and the` text in the footer. */
					esc_html__( 'and the %1$s', 'log-lolla-pro-theme' ),
					'<a class="link" href="https://morethemes.baby/themes/log-lolla-pro-theme" title="Log Lolla Pro Theme Theme">Log Lolla Pro Theme theme</a>'
				);
				?>
			</div>
		</div>
	</aside>
	<?php
}
?>
