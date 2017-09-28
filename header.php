<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>" />
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel='stylesheet' id='everyday-publishing-css'  href='/wp-content/themes/everyday-publishing/style.css?ver=4.8.2' async type='text/css' media='all' />
			<link rel='stylesheet' id='font-awesome-css'  href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?ver=4.8.2' async type='text/css' media='all' />
			<script type='text/javascript' src='/wp-content/themes/everyday-publishing/includes/toggle.js?ver=4.8.2' async></script>
			<?php wp_head(); ?>
		</head>

		<body <?php body_class(); ?> >
			<header>
				<nav>
					<a class="ep-hamburger" href="javascript:void(0);" onclick="toggleNav()">
						<i class="fa fa-bars">
						</i>
					</a>
					<a class="ep-home" href="/">
						<i class="fa fa-home">
						</i>
						Everyday Publishing
					</a>
					<h4 class="ep-title">
						<?php if (!is_front_page()) echo wp_title(); ?>
					</h4>
					<div id="ep-nav-dropdown" style="display: none;">
						<?php wp_nav_menu (); ?>
					</div>
				</nav>
			</header>
