<?php
/**
 * Comment template tags
 *
 * @link https://codex.wordpress.org/Template_Tags
 *
 * @package Log_Lolla_Pro
 * @since 1.0.0
 */

if ( ! function_exists( 'log_lolla_pro_theme_get_comment_excerpt_with_html_tags' ) ) {
	/**
	 * Returns a comment excerpt containing HTML tags.
	 *
	 * The original `comment_excerpt` strips all HTML tags and look ugly.
	 *
	 * @link https://developer.wordpress.org/reference/functions/get_comment_excerpt/ Original code
	 * @param  object $comment The comment.
	 * @return string          HTML
	 */
	function log_lolla_pro_theme_get_comment_excerpt_with_html_tags( $comment ) {
		// Capture comment text with HTML tags.
		ob_start();
		comment_text( $comment );
		$comment_text = ob_get_clean();

		// Borrow from original code.
		$words                  = explode( ' ', $comment_text );
		$comment_excerpt_length = apply_filters( 'comment_excerpt_length', 20 );
		$use_ellipsis           = count( $words ) > $comment_excerpt_length;

		if ( $use_ellipsis ) {
			$words = array_slice( $words, 0, $comment_excerpt_length );
		}

		$excerpt = trim( join( ' ', $words ) );

		if ( $use_ellipsis ) {
			$excerpt .= '&hellip;';
		}

		return $excerpt;
	}
}

if ( ! function_exists( 'log_lolla_pro_theme_get_comment_list_of_a_post' ) ) {
	/**
	 * Returns only the comments (no pingbacks and trackbacks) of a post
	 *
	 * @param  object $post The post.
	 * @return array        A list of comments
	 */
	function log_lolla_pro_theme_get_comment_list_of_a_post( $post ) {
		return get_comments(
			array(
				'post_id' => $post->ID,
				'status'  => 'approve',
				'type'    => 'comment',
			)
		);
	}
}

if ( ! function_exists( 'log_lolla_pro_theme_get_comment_list_created_before_date' ) ) {
	/**
	 * Returns a list of comments created before a date
	 *
	 * @param  array  $comments An array of comments.
	 * @param  string $date     A date.
	 * @return array            An array of comments
	 */
	function log_lolla_pro_theme_get_comment_list_created_before_date( $comments, $date ) {
		if ( empty( $comments ) || empty( $date ) ) {
			return;
		}

		return array_map(
			function ( $c ) use ( $date ) {
				if ( strtotime( $c->comment_date ) > strtotime( $date ) ) {
					return $c;
				}
			},
			$comments
		);
	}
}

if ( ! function_exists( 'log_lolla_pro_theme_get_comment_list_for_the_loop' ) ) {
	/**
	 * Returns a list of comments between two dates defined by the loop
	 *
	 * Comments between the first and last post's date in the loop will be returned.
	 *
	 * @param  array $posts An array of posts from the loop.
	 * @return array        An array of comments
	 */
	function log_lolla_pro_theme_get_comment_list_for_the_loop( $posts ) {
		if ( empty( $posts ) ) {
			return;
		}

		$first_post_date = get_the_date( '', $posts[0] );
		$last_post_date  = get_the_date( '', array_values( array_slice( $posts, -1 ) )[0] );

		return get_comments(
			array(
				'status'      => 'approve',
				'post_status' => 'publish',
				'type'        => 'comment',
				'date_query'  => array(
					'after'     => $last_post_date,
					'before'    => $first_post_date,
					'inclusive' => true,
				),
			)
		);
	}
}
