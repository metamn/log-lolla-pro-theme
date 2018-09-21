<?php
/**
 * Displays a summary of a post.
 *
 * It contains:
 * * A Post sticky template part.
 * * A Post title without link template part.
 * * A Post content template part.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

$post_klass       = log_lolla_pro_theme_get_post_class();
$post_klass_array = array(
	'post-single',
	'post-single-summary',
	$post_klass,
);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $post_klass_array ); ?>>
	<?php get_template_part( 'template-parts/post/parts/post', 'sticky' ); ?>
	<?php get_template_part( 'template-parts/post/parts/post', 'title-without-link' ); ?>
	<?php get_template_part( 'template-parts/post/parts/post', 'content' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
