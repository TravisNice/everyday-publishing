<div class="ep-container ep-twohird" style="max-width: 600px; margin: auto; padding-top: 64px;">

	<h2><?php the_title(); ?></h2>

	<p class="ep-tiny ep-text-gray"><time itemprop="datePublished" content="<?php the_time('Y-m-d') ?>"><?php the_time('F jS, Y') ?></time> by <?php the_author_posts_link(); ?></p>

	<?php the_content(); ?>

</div>
