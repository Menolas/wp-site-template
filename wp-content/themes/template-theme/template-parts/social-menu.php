<?php

$menu_name = 'social_menu';
$locations = get_nav_menu_locations();

$menu_items = wp_get_nav_menu_items($locations[$menu_name]);

$menu_list = '<ul class="social-menu__list">';

foreach ((array) $menu_items as $key => $menu_item) {
	$menu_list .= '<li class="social-menu__item"><a href="' . $menu_item->url . '" target="_blank"><span class="sr-only">' . $menu_item->title . '</span></a></li>';
}

$menu_list .= '</ul>';

?>

<div class="social-menu">
   <?=$menu_list;?>
</div>
