<?php
/**
 * Displays search results.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

get_header();
?>

<section class="search">
	<h3 class="search-title">
	<?php
	printf(
		/* translators: Search page title. */
		esc_html__( 'Search Results for: %s', 'log-lolla-pro-theme' ),
		'<span>&quot;' . get_search_query() . '&quot;</span>'
	);
	?>
	</h3>

	<?php
	if ( have_posts() ) :
		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part( 'template-parts/post/post', 'search' );

		endwhile;

			get_template_part( 'template-parts/navigation/navigation', 'for-posts' );

	else :

		get_template_part( 'template-parts/post/post', 'none' );

	endif;
	?>
</section>

<?php
get_footer();
