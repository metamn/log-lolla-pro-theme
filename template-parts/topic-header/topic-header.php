<?php
/**
 * Displays the header of a topic archive page
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

$title                = get_the_title();
$archive_counter_list = log_lolla_pro_theme_get_archive_counter_list( $post );
$pictograms           = log_lolla_pro_theme_get_pictogram_list( $archive_counter_list );

set_query_var( 'archive_title', $title );
set_query_var( 'pictograms', $pictograms );
get_template_part( 'template-parts/archive-header/archive-header', '' );
