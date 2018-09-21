<?php
/**
 * Displays a navigation menu in the header
 *
 * It is only displayed if there is a custom function to provide content for the header menu
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

if ( function_exists( 'log_lolla_pro_theme_display_header_menu_contents' ) ) {
	?>
	<nav class="header-menu header-menu--closed">
		<h3 class="hidden">Header menu</h3>

		<?php log_lolla_pro_theme_display_header_menu_contents(); ?>
	</nav>
	<?php
}
