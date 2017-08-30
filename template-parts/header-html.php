<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

<style type="text/css" media="screen">
<?php
    if ( is_admin_bar_showing() )
    {
?>
        html
        {
            margin-top: 70px !important;
        }
        
        * html body
        {
            margin-top: 70px !important;
        }
        
        @media screen and ( max-width: 782px )
        {
            html
            {
                margin-top: 84px !important;
            }
            
            * html body
            {
                margin-top: 84px !important;
            }
        }
<?php
    }
    else
    {
?>
        html
        {
            margin-top: 38px !important;
        }
        
        * html body
        {
            margin-top: 38px !important;
        }
<?php
    }
?>

</style>

</head>

<body <?php body_class(); ?> >
