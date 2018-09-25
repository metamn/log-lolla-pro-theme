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
	<?php
		$component_title_query_vars = array(
			'text' => 'Homepage',
		);

		set_query_var( 'component-title-query-vars', $component_title_query_vars );
		get_template_part( 'template-parts/framework/structure/component/parts/component-title', '' );

		get_template_part( 'template-parts/post-list/post-list', 'with-comments' );
	?>
</section>

<?php
get_footer();
