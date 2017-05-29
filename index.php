<?php
	get_header();
	
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			if (has_post_thumbnail()) {
				get_template_part('template-parts/content', 'with-thumb');
			}
			else {
				get_template_part('template-parts/content', 'no-thumb');
			}
		}
	}
	
	get_footer();
?>

