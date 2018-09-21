<?php
/**
 * Displays a list of counters for an Archive.
 *
 * It contains:
 * * A list of Archive Counter template parts.
 *
 * @param array $pictograms An array of pictograms.
 *
 * @link https://morethemes.baby/blog/tag/indie-web/ Live example
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

$pictograms = get_query_var( 'pictograms' );

if ( empty( $pictograms ) ) {
	$archive_counter_list = log_lolla_pro_theme_get_archive_counter_list();
	$pictograms           = log_lolla_pro_theme_get_pictogram_list( $archive_counter_list );
}

if ( empty( $pictograms ) ) {
	return;
}
?>

<nav class="archive-counter-list">
	<h3 class="hidden">Archive counter list</h3>

	<?php
	foreach ( $pictograms as $pictogram ) {
		set_query_var( 'pictogram', $pictogram );
		get_template_part( 'template-parts/archive/parts/archive-counter', '' );
	}
	?>
</nav>
