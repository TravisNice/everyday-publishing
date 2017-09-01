<?php
	/* Don't let anyone access this script directly */
	defined( 'ABSPATH' ) or die ( 'You are not allowed here. Shame on you for snooping :-(' );
	
	/* Create a globally defined path to the root of the theme's folder */
	if ( !defined( 'EVERYDAY_PUBLISHING_THEME_PATH' ) ) define( 'EVERYDAY_PUBLISHING_THEME_PATH', dirname( __FILE__ ) );
	
	/* Enqueue our own style sheet */
	add_action(
        'wp_enqueue_scripts',
        function ()
        {
            wp_enqueue_style( 'everyday_publishing', get_stylesheet_uri() );
        }
	);
	
	/* Enque the Font Awesome Style Sheet to access their icons */
	add_action(
        'wp_enqueue_scripts',
        function ()
        {
            wp_enqueue_style( 'font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
        }
    );
	
	/* Allow us to use thumbnails and featured images in our theme */
	add_action(
        'after_setup_theme',
        function ()
        {
            add_theme_support( 'post-thumbnails' );
        }
    );
    
	/* Widgetise the front page and remove the titles */
	add_action(
        'widgets_init',
        function ()
        {
            register_sidebar(
                array(
                    'name'          => 'Front Page Widgets',
                    'id'            => 'front-page-widgets',
                    'before_widget' => '',
                    'after_widget'  => '',
                    'before_title'  => '',
                    'after_title'   => ''
                )
            );
        }
    );
    
    /* Widgets for the Sidebar in Posts */
    add_action(
        'widgets_init',
        function ()
        {
            register_sidebar(
                array(
                    'name'          => 'Posts Sidebar Widgets',
                    'id'            => 'side-bar-widgets',
                    'before_widget' => '<div class="ep-card ep-margin ep-padding-medium">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h4>',
                    'after_title'   => '</h4>'
                )
            );
        }
    );
	
	/* Register the menu bar that appears at the top of the pages */
	register_nav_menu(
        'top-menu-bar',
        __( 'Top Menu Bar' )
    );
	
	/* Custom Walker Classes for producing plain <a>Menu Item</a> links in our custom menu */
    
	class everyday_publishing_large_menu extends Walker_Nav_Menu
    {
        function start_lvl( &$output, $depth = 0, $args = array() )
        {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent\n";
		}
        
        function end_lvl( &$output, $depth = 0, $args = array() )
        {
			$indent = str_repeat("\t", $depth);
			$output .= "$indent\n";
		}
        
        function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
        {
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
			$class_names = $value = '';
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;
			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
			$output .= $indent . '';
			$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
			$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
			$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
			$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
			$item_output = $args->before;
			$item_output .= '<a'. $attributes .' class="ep-bar-item ep-button ep-hide-small">';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
        
        function end_el( &$output, $item, $depth = 0, $args = array() )
        {
			$output .= "\n";
		}
	}
	
	class everyday_publishing_small_menu extends Walker_Nav_Menu
    {
		function start_lvl( &$output, $depth = 0, $args = array() )
        {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent\n";
		}
        
		function end_lvl( &$output, $depth = 0, $args = array() )
        {
			$indent = str_repeat("\t", $depth);
			$output .= "$indent\n";
		}
        
		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
        {
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
			$class_names = $value = '';
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;
			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
			$output .= $indent . '';
			$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
			$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
			$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
			$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
			$item_output = $args->before;
			$item_output .= '<a'. $attributes .' class="ep-bar-item ep-button">';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
        
		function end_el( &$output, $item, $depth = 0, $args = array() )
        {
			$output .= "\n";
		}
	}
?>
