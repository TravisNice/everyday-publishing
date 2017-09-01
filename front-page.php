<?php
    remove_filter(
        'the_content', 'wpautop'
    );

    add_filter(
        'widget_title',
        function ()
        {
            return '';
        },
        10,
        1
    );
    
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
