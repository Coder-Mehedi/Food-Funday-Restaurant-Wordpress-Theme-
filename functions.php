<?php

function food_funday_restaurant_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0', 'all' );

	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array('owl-theme'), '1.0', 'all' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/css/flaticon.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'animate.min', get_template_directory_uri() . '/css/animate.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'bootstrap-select', get_template_directory_uri() . '/css/bootstrap-select.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'bootstrap-datetimepicker', get_template_directory_uri() . '/css/bootstrap-datetimepicker.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0', 'all' );

	wp_enqueue_style( 'style', get_stylesheet_uri() );


	
	wp_enqueue_script( 'modernizer-js', get_template_directory_uri() . '/js/modernizer.js', array(), '1.0', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('all-js'), '1.0', true );
	wp_enqueue_script( 'all-js', get_template_directory_uri() . '/js/all.js', array('modernizer-js'), '1.0', true );
	
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'food_funday_restaurant_scripts' );


function food_funday_restaurant_setup() {

	load_theme_textdomain( 'ffr', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'ffr' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ffr_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}

add_action( 'after_setup_theme', 'food_funday_restaurant_setup' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'About Us Section',
		'menu_title'	=> 'About Us',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Manage Team Members',
	// 	'menu_title'	=> 'Team Member',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Manage Our Gallery Section',
		'menu_title'	=> 'Our Gallery Section',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> "Manage Today's Special Section",
		'menu_title'	=> "Today's Special",
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Manage Pricing Plan',
		'menu_title'	=> 'Pricing Plan',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}