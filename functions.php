<?php
/* Don't let anyone access this script directly */
defined( 'ABSPATH' ) or die ( 'You are not allowed here. Shame on you for snooping :-(' );

/* Remove extraneous links from header */
remove_action( 'rest_api_init', 'wp_oembed_register_route' );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'wp_generator');
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

add_filter( 'embed_oembed_discover', '__return_false' );
//add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
add_filter( 'xmlrpc_enabled', '__return_false' );
add_filter( 'wp_headers', function ( $headers ) {unset( $headers['X-Pingback'] );return $headers;} );
add_filter( 'xmlrpc_methods', function( $methods ) {unset( $methods[‘pingback.ping’] );return $methods;} );

/* Allow us to use thumbnails and featured images in our theme */
function ep_setup_theme () {
	add_theme_support ( 'post-thumbnails' );

	$name = 'ep_tiny_thumb';
	$width = 320;
	$height = 180;
	$crop = true;
	add_image_size($name, $width, $height, $crop);

	$name = 'ep_small_thumb';
	$width = 640;
	$height = 360;
	$crop = true;
	add_image_size($name, $width, $height, $crop);

	$name = 'ep_large_thumb';
	$width = 960;
	$height = 540;
	$crop = true;
	add_image_size($name, $width, $height, $crop);

	$name = 'ep_largest_thumb';
	$width = 1920;
	$height = 1080;
	$crop = true;
	add_image_size($name, $width, $height, $crop);

	register_nav_menu ( 'top-menu-bar', __( 'Top Menu Bar' ) );
}
add_action( 'after_setup_theme', 'ep_setup_theme' );

/* Widgetise */
function ep_widget_init () {
	register_sidebar(
		array(
			'name'          => 'Front Page',
			'id'            => 'ep-front-page-widgets',
			'before_widget' => '<div class="ep-front-page-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="ep-front-page-widget-title">',
			'after_title'   => '</div>'
		)
	);

	register_sidebar(
		array(
			'name'          => 'Sidebar Widgets',
			'id'            => 'ep-aside-widgets',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		)
	);
}
add_action( 'widgets_init', 'ep_widget_init' );

require_once ( 'classes/widgets.php' );
function ep_front_page_button_widget_registration () {
	register_widget ( 'epFrontPageButtonWidget' );
}
add_action ( 'widgets_init', 'ep_front_page_button_widget_registration' );
