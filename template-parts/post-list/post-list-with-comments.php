<?php
/**
 * Displays a list of posts and comments
 *
 * @package Log_Lolla_Pro_Theme
 * @since 1.0.0
 */

?>

<section class="post-list post-list--with-comments">
	<?php
		$component_title_query_vars = array(
			'text'  => 'Post list with comments',
			'klass' => 'list-title hidden',
		);

		set_query_var( 'component-title-query-vars', $component_title_query_vars );
		get_template_part( 'template-parts/framework/structure/component/parts/component-title', '' );
	?>

	<div class="list-items">
		<?php
		if ( have_posts() ) :

			// Get comments for this set of posts.
			$comments = log_lolla_pro_theme_get_comment_list_for_the_loop( $wp_query->posts );

			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/post-format/post-format', get_post_format() );


				// Get all comments before the post date.
				$comments_before_post = log_lolla_pro_theme_get_comment_list_created_before_date( $comments, get_the_date() );

				// Display comments.
				if ( ! empty( $comments_before_post ) ) {
					foreach ( $comments_before_post as $comment ) {
						get_template_part( 'template-parts/comment/comment', 'in-loop' );

						// Remove comment from the list.
						$comments = log_lolla_pro_theme_remove_object_from_array( $comments, $comment );
					}
				}

			endwhile;
				get_template_part( 'template-parts/navigation/navigation', 'for-posts' );
		else :
			get_template_part( 'template-parts/post/post', 'none' );
		endif;
		?>
	</div>
</section>
