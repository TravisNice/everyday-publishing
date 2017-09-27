<?php
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

	get_footer ();
