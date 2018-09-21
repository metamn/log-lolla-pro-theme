<?php
/**
 * Displays a list of posts for a Summary
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

$topic = log_lolla_pro_theme_get_post_type_summary_topic( $post );
$posts = log_lolla_pro_theme_get_post_type_summary_post_list_for_the_summary( $post, $topic );

if ( empty( $posts ) ) {
	return;
}

/* translators: The title of the Summary posts lists. */
$title = esc_html_x( 'Based on these posts:', 'The title of the Summary posts lists', 'log-lolla-pro-theme' );

$post_list_query_vars = array(
	'title' => $title,
	'klass' => 'for-a-summary',
	'posts' => $posts,
);
set_query_var( 'post-list-query-vars', $post_list_query_vars );
get_template_part( 'template-parts/post-list/post-list', '' );
