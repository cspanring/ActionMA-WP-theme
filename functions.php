<?php
/**
* Override parent theme functions
*/
add_action( 'after_setup_theme', 'actionma_setup' );
function actionma_setup() {}

if ( ! function_exists( 'twentyten_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 *
	 * @since Twenty Ten 1.0
	 */
	function twentyten_posted_on() {
		printf( __( '<span class="%1$s">Posted on</span> %2$s', 'twentyten' ),
			'meta-prep meta-prep-author',
			sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
				get_permalink(),
				esc_attr( get_the_time() ),
				get_the_date()
			)
		);
	}
endif;