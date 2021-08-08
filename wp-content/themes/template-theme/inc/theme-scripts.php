<?php

function theme_scripts() 
{
	//wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

	wp_enqueue_style('main-style', get_template_directory_uri() .'/dist/css/style.css');

	wp_register_script('menu-mobile', get_template_directory_uri() .'/source/js/menu-mobile.js', [], 1, true);
	    wp_enqueue_script('menu-mobile');
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );
