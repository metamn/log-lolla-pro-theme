<?php
/**
 * Displays a list of Summary post type for special Post types like Source and People
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

$archive           = get_queried_object();
$archive->taxonomy = 'post_tag';
$archive->slug     = $archive->post_name;

set_query_var( 'archive', $archive );
get_template_part( 'template-parts/post-list/post-list', 'summaries' );
