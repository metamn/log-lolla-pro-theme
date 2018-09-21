<?php
/**
 * Template Name: Standard Post Format Archive Template
 *
 * Template to display the Standard Post format archive.
 *
 * By default WordPress has no archive for Standard post formats.
 * We should create a page titled `Post Format Standard` and use this template to show Standard Post format archives.
 *
 * In `inc/template-functions` we have a rewrite rule to map `post-format/standard` to this page.
 *
 * * The page contains:
 *  * A Header from the Archive template part.
 *  * A Post list of Thoughts from the Post template part.
 *  * A Post list of Summaries from the Post template part.
 *  * A Topic list for the related topics from the Topic template part.
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

get_header();
?>

<section class="archive archive-for-post-format-standard">
	<h3 class="archive-title">Archive for Standard post format</h3>

	<div class="archive-items">
		<?php
			$archive = get_queried_object();
		?>

		<?php
			$posts = log_lolla_pro_theme_get_post_format_standard_post_list();
			set_query_var( 'posts', $posts );
			get_template_part( 'template-parts/post-list/post-list', 'thoughts' );
		?>

		<?php
			set_query_var( 'archive', $archive );
			get_template_part( 'template-parts/post-list/post-list', 'summaries' );
		?>

		<?php
			set_query_var( 'related-to', $archive );
			get_template_part( 'template-parts/topic-list/topic-list', 'related-topics' );
		?>

		<?php
			$title = log_lolla_pro_theme_get_post_format_label( 'Standard' );
			set_query_var( 'archive_title', $title );
			get_template_part( 'template-parts/archive-header/archive-header', '' );
		?>
	</div>
</section>

<?php
get_footer();
