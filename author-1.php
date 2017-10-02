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

	$id_or_email = 1;
	$size = 128;
	$default = "";
	$alt = "Travis Nice";
	$args = array();

	get_header ();
	echo '<main>';

	echo '<p>'. get_avatar( $id_or_email, $size, $default, $alt, $args ) .'I used to work 9-5 as a financial planner. I spent my day selling insurance and managed funds, and I was so bored! I wanted to get creative so I took drawing classes, writing classes, salesmanship classes. I built websites just to learn how they’re built. I studied the psychology of colours, the psychology of words, the history of fonts and typesetting. Basically I studied everything I didn’t need in my day job.</p>';
	echo '<p>I adapted all I learned into making my own ads and brochures. I learned the intricacies of advertising. I learned (the hard way) how to determine a maximum spend when advertising. Above all else I learned what is important to measure and what is just fluff.</p>';
	echo '<p>Then one day, it hit me. All Business owners have their own specialities, mine just happens to be online marketing, not financial planning. I now build websites so businesses have a place to put their products, I help them generate content to explain their products, and I help them build advertising campaigns to find new customers.</p>';
	echo '<hr />';

	if ( have_posts () ) {
		while ( have_posts () ) {
			the_post ();
			echo '<article>';
			include ( 'ep-post-meta.php' );
			echo '<a href="'. get_the_permalink () .'"<h4>'. get_the_title () .'</h4></a>';
			the_excerpt ();
			echo '</article>';
		}
	}

	/* Pagination */
  echo '<span class="ep-pagination-row">'. $pagination .'</span>';

	echo '</main>';

	get_footer ();
