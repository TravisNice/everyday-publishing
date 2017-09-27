<?php
/*
 * Template Name: Right Sidebar
 * Template Post Type: post, page, event
 */

get_header ();
echo '<main>';
if (have_posts()) {
	while (have_posts()) {
		the_post();

		echo '<article>';

		the_content();

		echo '</article>';
	}
}
echo '</main>';

get_sidebar();
get_footer ();
