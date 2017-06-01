	<!-- By Line -->
	<div class="ep-container ep-tiny ep-text-gray" style="max-width: 960px; margin: 0 auto;">
		<time itemprop="datePublished" content="<?php the_time('Y-m-d') ?>"><?php the_time('F jS, Y') ?></time> by <?php the_author_posts_link(); ?>
	</div>

	<!-- Content -->
	<div class="ep-container" style="max-width: 960px; margin: 0 auto;">
		<?php the_excerpt(); ?>
	</div>
</div>
<hr />
