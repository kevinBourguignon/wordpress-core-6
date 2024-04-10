<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav class="menu">
            <a href="#"><img src="wp-content/themes/plaisirsduthe/ECF_DWWM_Wordpress_Theme_Niveau1_logo.jpg" alt="logo"></a>
            <?php wp_nav_menu([
                'theme_location'=> 'header',
                'menu_class'=> 'nav-menu',
            ])
            ?>    
        </nav>
    </header>
    
