<?php
	get_header();
	if ( have_posts () ) {
		echo '<div class="ep-container" style="max-width: 960px; margin: 32px auto;"><h2>Search Results</h2></div><hr />';
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
