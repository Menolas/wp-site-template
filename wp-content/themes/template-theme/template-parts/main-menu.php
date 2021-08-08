<?php

add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 2 );
function special_nav_class($classes, $item)
{
    $classes[] = 'main-menu__item';
	return $classes;
}

wp_nav_menu( array(
	'theme_location'  => 'Primary',
	'container'       => 'ul',
	'menu_class'      => 'main-menu__list',
	'depth'           => 0
));

?>
