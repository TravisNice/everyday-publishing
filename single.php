<?php
get_header ();
if (have_posts()) {
	while (have_posts()) {
		the_post();
		echo '<article>';
		the_content();
		echo '</article>';
	}
}
echo '<div class="ep-comments">';
comments_template ();
echo '</div>';
get_footer ();
