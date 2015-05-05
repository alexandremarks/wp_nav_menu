<?php

add_theme_support('menus');

add_action('init', 'wp_init');

function wp_init() {
	wp_register_menus();
}

function wp_register_menus(){
	register_nav_menu('menu-primario', 'Menu Principal');
}