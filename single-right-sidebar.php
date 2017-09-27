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
			echo '<span class="ep-article-meta">';
			echo '<span class="author"><small><em><a href="'. get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) .'" rel="author">'. get_the_author() .'</a></em></small></a></span>';
			echo '<time itemprop="datePublished" content="'. get_the_time("Y-m-d") .'"><small><em>'. get_the_time("F jS, Y") .'</em></small></time>';
			echo '</span>';

			echo '<article>';

			the_content();

			echo '</article>';

			if (comments_open()) comments_template();
		}
	}
	
	echo '</main>';

	get_sidebar();

	get_footer ();
