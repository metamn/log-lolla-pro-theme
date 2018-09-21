<?php
/**
 * Displays the home page.
 *
 * The home page is a list of posts and comments.
 *
 * @link https://morethemes.baby/blog/ Live example
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ Wordpress documentation
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

get_header();
?>

<section class="home">
	<h3 class="hidden">Homepage</h3>

	<?php get_template_part( 'template-parts/post-list/post-list', 'with-comments' ); ?>
</section>

<?php
get_footer();
