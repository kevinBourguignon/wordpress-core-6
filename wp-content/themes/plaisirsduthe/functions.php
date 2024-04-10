<?php 

function the_setup(){

    add_theme_support('title-tag');
    register_nav_menu('header', 'entête de page');

}

add_action('after_setup_theme', 'the_setup');