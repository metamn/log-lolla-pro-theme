<?php
/**
 * Displays a Person's page (a single People page).
 *
 * The page contains:
 *  * A Header from the Archive template tag
 *  * A Post list from the Post template tag
 *  * A Post list of Summaries from the Post template tag
 *  * A Topic list from the Topic template tag
 *
 * @link https://morethemes.baby/blog/people/ben-thompson/ Live example
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ WordPress documentation
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

get_header();
?>

<section class="archive archive-for-a-single-people">
	<h3 class="archive-title">Single person archive</h3>

	<div class="archive-items">
		<?php
		get_template_part( 'template-parts/post-list/post-list', 'for-a-post-type' );
		get_template_part( 'template-parts/post-list/post-list', 'summaries-for-post-type' );

		$topic = get_term_by( 'slug', $post->post_name, 'post_tag' );
		set_query_var( 'related-to', $topic );
		get_template_part( 'template-parts/topic-list/topic-list', 'related-topics' );

		get_template_part( 'template-parts/archive-header/archive-header', 'for-post-type' );
		?>
	</div>
</section>

<?php
get_footer();
