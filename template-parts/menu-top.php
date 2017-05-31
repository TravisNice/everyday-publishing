<?php
	/* Setup the menu to use <div> and <a> rather than Wordpress' default <ul> <li> <a> */
	
	$largeArgs = array ( 'menu_class' => false,
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
		        'walker' => new everyday_publishing_large_menu,
		        'theme_location' => 'top-menu-bar',
		        'items_wrap' => '%3$s',
		        'item_spacing' => 'preserve'
	);
	
	$smallArgs = array ( 'menu_class' => false,
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
			    'walker' => new everyday_publishing_small_menu,
			    'theme_location' => 'top-menu-bar',
			    'items_wrap' => '%3$s',
			    'item_spacing' => 'preserve'
			    );
	
	global $woocommerce;
?>

<div class="ep-top">
	<!-- Large Screens -->
	<div id="largeNav" class="ep-bar ep-dark-brass ep-left-align">
		<a class="ep-bar-item ep-button ep-hide-medium ep-hide-large ep-right ep-hover-light-brass" href="javascript:void(0);" onclick="openNav()">
			<i class="fa fa-bars">
			</i>
		</a>
		<a href="/" class="ep-bar-item ep-button ep-light-brass">
			<i class="fa fa-home ep-margin-right">
			</i>
			Everyday Publishing
		</a>
		<?php wp_nav_menu ( $largeArgs ); ?>
<a class="ep-button ep-bar-item ep-dark-brass ep-hover-light-brass ep-hide-small ep-right" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><i class="fa fa-shopping-basket ep-margin-right" aria-hidden="true"></i><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	</div>

	<!-- Small Screens -->
	<div id="smallNav" class="ep-bar-block ep-dark-brass ep-hide ep-hide-large ep-hide-medium">
		<?php wp_nav_menu ( $smallArgs ); ?>
	</div>
</div>
