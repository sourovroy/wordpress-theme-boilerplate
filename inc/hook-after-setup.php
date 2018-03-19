<?php
/**
* Sets up theme defaults and registers support for various WordPress features.
*/
add_action( 'after_setup_theme', function(){

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	//add_image_size( 'twentyseventeen-featured-image', 2000, 1200, true );
	//add_image_size( 'twentyseventeen-thumbnail-avatar', 100, 100, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(array(
		'top-menu'    => 'Top Menu',
		'social-menu' => 'Social Links Menu',
	));

	/*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
	add_theme_support('html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

});