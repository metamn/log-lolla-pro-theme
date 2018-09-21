<?php
/**
 * Template Name: Archives Template
 *
 * Template to display the main Archives page.
 *
 * The page contains:
 *  * The display of all the shortcodes found in the page body.
 *
 * @link https://morethemes.baby/blog/archives Live example
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/ WordPress documentation
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

get_header();
?>


<section class="archives">
	<h3 class="archives-title">
		<?php echo esc_attr( log_lolla_pro_theme_get_archive_label( 'Archives' ) ); ?>
	</h3>

	<div class="archives-items">
		<?php
		// Display the content of the page.
		if ( have_posts() ) {

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;

		} else {
			get_template_part( 'template-parts/post/post', 'none' );
		}

		wp_reset_postdata();
		?>
	</div>
</section>

<?php set_query_var( 'display-sidebar', false ); ?>
<?php get_footer(); ?>
