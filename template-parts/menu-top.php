<?php
	/* Setup the menu to use <div> and <a> rather than Wordpress' default <ul> <li> <a> */
	
	$args = array ( 'menu_class' => false,
		        'menu_id' => false,
		        'container' => false,
		        'container_class' => false,
		        'container_id' => false,
		        'fallback_cd' => false,
		        'before' => false,
		        'after' => false,
			'link_before' => false,
			'link_after' => false,
		        'echo' => true,
		        'depth' => 0,
		        'walker' => new everyday_publishing_top_menu,
		        'theme_location' => 'top-menu-bar',
		        'items_wrap' => '%3$s',
		        'item_spacing' => 'preserve'
	);
?>

<div class="ep-top">
	<div class="ep-bar ep-dark-brass ep-left-align">
		<a href="/" class="ep-bar-item ep-button ep-light-brass">
			<i class="fa fa-home ep-margin-right">
			</i>
			<span style="font-family: Merriweather">
				Everyday Publishing
			</span>
		</a>
		<?php wp_nav_menu ( $args ); ?>
	</div>
</div>
