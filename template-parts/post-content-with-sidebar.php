<!-- By Line -->
<div class="ep-container ep-tiny ep-text-gray" style="max-width: 900px; margin: 0 auto;">
	<time itemprop="datePublished" content="<?php the_time('Y-m-d') ?>"><?php the_time('F jS, Y') ?></time> by <?php the_author_posts_link(); ?>
</div>

<div class="ep-row" style="max-width: 900px; margin: 0 auto;">
	<!-- Content -->
	<div class="ep-container ep-twothird ep-left">
		<?php the_content(); ?>
	</div>

	<!-- Side Bar -->
	<div class="ep-container ep-onethird ep-left">
		<?php get_sidebar('side-bar-widgets'); ?>
	</div>
</div>

<hr />

<!-- Comments -->
<div class="ep-container" style="max-width: 900px; margin: 0 auto;">
	<?php comments_template(); ?>
</div>
