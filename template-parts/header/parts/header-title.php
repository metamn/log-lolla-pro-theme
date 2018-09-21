<?php
/**
 * Template part for displaying the header title
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

if ( display_header_text() ) {
	?>

	<h3 class="header-title">
		<a class="link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo bloginfo( 'name' ); ?>">
			<span class="text">
				<?php bloginfo( 'name' ); ?>
			</span>
		</a>
	</h3>
	<?php
}
