<!-- Featured Image -->
<div class="ep-display-container ep-animate-opacity">
	<?php $size = 'full'; $attr = array('class' => 'ep-featured-image'); the_post_thumbnail($size, $attr); ?>
	<div class="ep-container ep-display-bottomleft ep-margin-bottom ep-xlarge ep-opacity ep-text-white" style="text-shadow: 1px 1px 0 #444;">
		<?php the_title(); ?>
	</div>
</div>
