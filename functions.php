<?php
/* Don't let anyone access this script directly */
defined( 'ABSPATH' ) or die ( 'You are not allowed here. Shame on you for snooping :-(' );

/* include other classes */
require_once ( 'classes/menus.php' );

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

/* Support asyncronus loading of enqueued scripts
function ep_async_scripts($url)
{
  if ( strpos( $url, '#asyncload') === false ) return $url;
  else if ( is_admin() ) return str_replace( '#asyncload', '', $url );
  else return str_replace( '#asyncload', '', $url )."' async='async";
}
add_filter( 'clean_url', 'ep_async_scripts' );

 Enqueue the style sheets that we will use in the theme */
function ep_enqueue_scripts () {
	wp_deregister_script('wp-embed');
	wp_deregister_script('jquery');

	/* JavaScript for our own theme that we know is shown on every page
	wp_enqueue_script ( 'toggle_navigation', get_template_directory_uri().'/includes/toggle.js#asyncload' );*/

	/* CSS for our own theme that we know is shown on every page
	wp_enqueue_style ( 'everyday-publishing', get_stylesheet_uri().'#asyncload' );
	wp_enqueue_style ( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css#asyncload' );*/
}
add_action( 'wp_enqueue_scripts', 'ep_enqueue_scripts' );

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
			'name'          => 'Sidebar Widgets',
			'id'            => 'ep-aside-widgets',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>'
		)
	);
}
add_action( 'widgets_init', 'ep_widget_init' );
