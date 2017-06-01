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
		      'prev_text'          => __('<span class="ep-button">«</span>'),
		      'next_text'          => __('<span class="ep-button">»</span>'),
		      'type'               => 'plain',
		      'add_args'           => false,
		      'add_fragment'       => '',
		      'before_page_number' => '<span class="ep-button">',
		      'after_page_number'  => '</span>'
		      );
	
	$pagination = paginate_links( $args );
?>

<div class="ep-bar" style="max-width: 960px; margin: 32px auto; text-align: center;">
	<?php echo $pagination; ?>
</div>
