<?php
/**
 * Template Name: Archives by date Template
 *
 * Template to display a yearly / monthly archive.
 *
 * The page contains:
 *  * A Header from the Archive template part.
 *  * The display of the `log-lolla-pro-theme-archives-by-date` shortcode.
 *
 * @link https://morethemes.baby/blog/years-and-months Live example
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/ WordPress documentation
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

get_header();
?>


<section class="archive archives-by-date">
	<h3 class="archive-title">Archives by date</h3>

	<div class="archive-items">
		<?php echo do_shortcode( '[log-lolla-pro-theme-archives-by-date]' ); ?>

		<?php
		$title = log_lolla_pro_theme_get_archive_label( 'Archives by date' );
		set_query_var( 'archive_title', $title );
		get_template_part( 'template-parts/archive-header/archive-header', 'without-counters' );
		?>
	</div>
</section>

<?php get_footer(); ?>
