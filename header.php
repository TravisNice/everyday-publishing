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
<style>

*{box-sizing:border-box;}
a{color:#000;font-weight:600;text-decoration:none;transition:.75s;-o-transition:.75s;-ms-transition:.75s;-moz-transition:.75s;-webkit-transition:.75s;}
a:hover{color:#ccc;}
aside{grid-area:ep-aside;margin:0 auto;max-width:20em;width:100%;}
aside ul{list-style-type:none;margin:0;padding:0;}
aside ul li{border-bottom:solid 1px #000;}
aside ul li:last-child{border-bottom:none;}
aside ul li:hover{background-color:#ccc;transition:.75s;-o-transition:.75s;-ms-transition:.75s;-moz-transition:.75s;-webkit-transition:.75s;}
aside ul li a{display:block;font-weight:400;padding:0.5em;}
aside ul li a:hover{color:#000;}
body{background-color:#fff;color:black;display:grid;grid-template-areas:"ep-head"
"ep-main"
"ep-foot";grid-template-columns:1fr;grid-template-rows:auto 1fr 4em;min-height:100vh;}
footer{grid-area:ep-foot;text-align:center;}
form{width:100%;}
input[type=submit],label{display:inline-block;margin-top:2em;}
input[type="text"], textarea{border-style:solid;border-color:#000;border-width:thin;border-top:none;border-left:none;border-right:none;display:block;padding:0.5em 1em;width:100%;}
h1{font-size:2em;line-height:1.25;}
h2{font-size:1.625em;line-height:1.15384615;}
h3{font-size:1.375em;line-height:1.13636364;}
h4{font-size:1.125em;line-height:1.11111111;}
@media (min-width:30em){h1{font-size:2.5em;line-height:1.125;}
h2{font-size:2em;line-height:1.25;}
h3{font-size:1.5em;line-height:1.25;}
h4{line-height:1.22222222;}
blockquote{font-size:1.5em;line-height:1.45833333;}
}
@media (min-width:60em){h1{font-size:3em;line-height:1.05;}
h2{font-size:2.25em;line-height:1.25;}
h3{font-size:1.75em;line-height:1.25;}
}
blockquote{font-size:1.25em;line-height:1.25;}
header{grid-area:ep-head;}
hr{border-color:#544832;margin:1em 0;}
html{box-sizing:border-box;font-family:-apple-system,
BlinkMacSystemFont,
"Segoe UI",
Roboto,
Helvetica,
Arial,
sans-serif,
"Apple Color Emoji",
"Segoe UI Emoji",
"Segoe UI Symbol";font-size:1em;line-height:1.5;overflow-x:hidden;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;}
input[type=submit]{background-color:#000;color:#fff;border:none;padding:0.5em 1em;transition:.75s;-o-transition:.75s;-ms-transition:.75s;-moz-transition:.75s;-webkit-transition:.75s;}
input[type=submit]:hover{color:#ccc;}
main{grid-area:ep-main;margin:0 auto;max-width:40em;width:100%;}
nav{width:100%;position:relative;}
nav a{padding:0.5em 0;margin-right:1em;display:inline-block;}
nav div{background-color:#000;left:1.5em;position:absolute;top:2.5em;z-index:3;}
nav div a{color:#fff;display:block;padding:0.5em 1em;}
nav span.breadcrumb-menu{display:inline-block;font-weight:600;}
small{font-size:0.66667em;}
span.ep-article-meta{display:block;float:left;text-align:right;width:100%;}
span.author{display:inline-block;margin-right:1em;}
time{display:inline-block;}
time{display:inline;float:right;margin-right:1em;}
</style>
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
