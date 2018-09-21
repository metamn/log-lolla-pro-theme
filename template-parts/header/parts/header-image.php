<?php
/**
 * Displays the header image.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

if ( get_header_image() ) {
	?>
	<aside class="header-image">
		<h3 class="hidden">Image</h3>

		<figure class="image">
			<?php the_header_image_tag(); ?>
		</figure>
	</aside>
	<?php
}
