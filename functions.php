<?php

include 'acf/acf-settings.php';

add_theme_support('post-thumbnails');
add_theme_support('menus');

function resources() {
	//Stylesheets
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap' );
	wp_register_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'style' );
	wp_register_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'slick' );
	wp_register_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'slick-theme' );
	wp_register_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'responsive' );

	//Scripts
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array('jquery'));
	wp_enqueue_script( 'zoom', get_template_directory_uri() . '/js/zoom.js', array('jquery'));
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'resources' );

//Custom Post Types

function RV_post_types() {
	register_post_type('Models', array(
		'labels' => array(
			'name' => __('Brands'),
			'singular_name' => __('Brand')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'models'),
		'menu_icon' => 'dashicons-carrot',
		'supports' => array('title','thumbnail'),
		'taxonomies' => array('category')
		)
	);
}

add_action('init', 'RV_post_types');

function RV_tax() {
	register_taxonomy(
		'brands',
		'models',
		array(
			'label' => __( 'Manufacturers' ),
			'rewrite' => array( 'slug' => 'brand' ),
			'hierarchical' => true,
			)
		);
	register_taxonomy(
		'type',
		'models',
		array(
			'label' => __( 'Type' ),
			'rewrite' => array( 'slug' => 'type' ),
			'hierarchical' => true,
			)
		);
	register_taxonomy(
		'years',
		'models',
		array(
			'label' => __( 'Year' ),
			'rewrite' => array( 'slug' => 'year' ),
			'hierarchical' => true,
			)
		);
}

add_action('init', 'RV_tax');


function get_brand($postID) {
	$brandlist =  wp_get_post_terms($postID, 'brands');
	if ($brandlist) {
		return $brandlist[0]->name;
	}
	else {
		return false;
	}
}

function get_brand_slug($postID) {
	$brandlist =  wp_get_post_terms($postID, 'brands');
	if ($brandlist) {
		return $brandlist[0]->slug;
	}
	else {
		return false;
	}
}


function get_types($postID) {
	$typelist =  wp_get_post_terms($postID, 'type');

	if ($typelist) {
		return $typelist;
	}
	else {
		return false;
	}
}

function get_years($postID) {
	$yearlist = wp_get_post_terms($postID, 'years');
	if ($yearlist) {
		return $yearlist;
	}
	else {
		return false;
	}
}

register_nav_menus( array(
	'Header_Nav' => 'Header Navigation Area',
	) );

?>