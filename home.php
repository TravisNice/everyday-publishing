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

get_header ();
if ( have_posts () ) {
	while ( have_posts () ) {
		the_post ();
		echo '<article>';
		echo '<a href="'. get_the_permalink () .'"<h4>'. get_the_title () .'</h4></a>';
		the_excerpt ();
		echo '</article>';
	}
}
echo '<div class="ep-pagination">'. paginate_links ( $args ) .'</div>';
get_footer ();
