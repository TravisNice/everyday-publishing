<?php
	get_header();
	if ( have_posts () ) {
		while ( have_posts () ) {
			the_post ();
			if ( has_post_thumbnail () ) {
				get_template_part( 'template-parts/excerpt-title', 'with-image' );
			} else {
				get_template_part( 'template-parts/excerpt-title', 'without-image' );
			}
			get_template_part( 'template-parts/excerpt-content', 'without-sidebar' );
		}
	}
	get_footer();
?>
