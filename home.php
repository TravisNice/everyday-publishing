<?php
	global $wp_query;
	$big = 999999999;

	$args = array(
		'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format'             => '/page/%#%',
		'total'              => $wp_query->max_num_pages,
		'current'            => max( 1, get_query_var( 'paged' ) ),
		'show_all'           => false,
		'end_size'           => 1,
		'mid_size'           => 2,
		'prev_next'          => true,
		'prev_text'          => __('«'),
		'next_text'          => __('»'),
		'type'               => 'plain',
		'add_args'           => false,
		'add_fragment'       => '',
		'before_page_number' => '',
		'after_page_number'  => ''
	);

	$pagination = paginate_links( $args );

	get_header ();
	echo '<main>';
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			echo '<span class="ep-article-meta">';
			echo '<span class="author"><small><em><a href="'. get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) .'" rel="author">'. get_the_author() .'</a></em></small></a></span>';
			echo '<time itemprop="datePublished" content="'. get_the_time("Y-m-d") .'"><small><em>'. get_the_time("F jS, Y") .'</em></small></time>';
			echo '</span>';

			echo '<h3><a href="'. get_post_permalink() .'">'. get_the_title() .'</a></h3>';

			echo '<article>';
			the_excerpt();
			echo '</article>';

		}
	}

	/* Pagination */
  echo '<span class="ep-pagination-row">'. $pagination .'</span>';

	echo '</main>';

	get_footer ();
