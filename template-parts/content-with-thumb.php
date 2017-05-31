<!-- Featured Image -->

<div class="ep-display-container ep-animate-opacity" style="margin: auto; max-width: 900px; margin-top:32px">

	<?php $size = 'full'; $attr = array( 'class' => 'ep-featured-image' ); the_post_thumbnail($size, $attr); ?>

	<div class="ep-container ep-display-bottomleft ep-margin-bottom ep-xlarge ep-text-white" style="text-shadow: 1px 1px 0 #444;">

		<h2>

			<?php the_title(); ?>

		</h2>

	</div>

</div>

<!-- By Line -->

<div class="ep-container ep-tiny ep-text-gray" style="margin: auto; max-width: 900px;">

	<time itemprop="datePublished" content="<?php the_time('Y-m-d') ?>">

		<?php the_time('F jS, Y') ?>

	</time>

	by <?php the_author_posts_link(); ?>

</div>

<!-- Content -->

<div class="ep-container" style="max-width: 900px; margin: 0 auto;">
	<div class="ep-twohird ep-left" style="max-width: 600px;">

		<?php the_content(); ?>

	</div>

	<!-- Sidebar -->

	<div class="ep-container ep-onethird ep-left" style="max-width: 300px;">

		&nbsp

	</div>

</div>
