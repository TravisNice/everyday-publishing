<?php
    remove_filter( 'the_content', 'wpautop' );
    
    if ( 'posts' == get_option( 'show_on_front' ) )
    {
        include( get_home_template() );
    }
    else
    {
        if ( is_active_sidebar( 'front-page-widgets' ) )
        {
            get_header();
            dynamic_sidebar( 'front-page-widgets' );
            get_footer();
        }
    }
?>
