<?php
/**
 * Displays a Summary post type date.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

?>

<aside class="post-date-with-prefix">
	<h3 class="hidden">Post date for Summary Post type</h3>

	<?php echo wp_kses_post( log_lolla_pro_theme_display_summary_dates_prefix( $post ) ); ?>

	<div class="posted-on">
		<?php echo wp_kses_post( log_lolla_pro_theme_display_summary_dates( $post ) ); ?>
	</div>
</aside>
