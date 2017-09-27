<?php
	/* Setup the menu to use <div> and <a> rather than Wordpress' default <ul> <li> <a> */
	$navArgs = array (
		'menu_class' => false,
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
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- Thanks for checking things out. Feel free to use anything you find. If
you're trying to find out how we did something but can't find it here, get in
touch with us through our contact page. -->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >
	<header>
		<nav>
			<a class="hamburger-menu" href="javascript:void(0);" onclick="toggleNav()">
				<i class="fa fa-bars"></i>
			</a>
			<a class="home-menu" href="/">
				<i class="fa fa-home"></i>
				Everyday Publishing
			</a>
			<span class="breadcrumb-menu"><?php if (!is_front_page()) echo wp_title(); ?></span>
			<div id="navMenu" style="display: none;">
				<?php wp_nav_menu ( $navArgs ); ?>
			</div>
		</nav>
	</header>
