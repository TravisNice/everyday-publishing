<?php
    /*
	    Template Name: No Sidebar
	    Template Post Type: post
     */
    
	get_header();
	if ( have_posts () ) {
		while ( have_posts () ) {
			the_post ();
			if ( has_post_thumbnail () ) {
				get_template_part( 'template-parts/post-title', 'with-image' );
			} else {
				get_template_part( 'template-parts/post-title', 'without-image' );
			}
			get_template_part( 'template-parts/post-content', 'without-sidebar' );
		}
	}
	get_footer();
    
?>
