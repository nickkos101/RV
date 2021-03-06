<?php

include 'acf/acf-settings.php';


add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support( 'custom-logo', array(
	'height'      => 110,
	'flex-height' => false,
	'flex-width' => true,
) );

function rv_prefix_setup() {

	add_theme_support( 'custom-logo', array(
		'height'      => 110,
		'flex-height' => false,
	//	'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'rv_prefix_setup' );

function resources() {
	//Stylesheets
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap' );
	// wp_register_style( 'style', get_template_directory_uri() . '/css/style.css' );
	// wp_enqueue_style( 'style' );
	wp_register_style( 'style-rewrite', get_template_directory_uri() . '/css/style-rewrite.css' );
	wp_enqueue_style( 'style-rewrite' );
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
	wp_enqueue_script( 'google-maps-api', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array('jquery'));
	wp_enqueue_script( 'maps', get_template_directory_uri() . '/js/maps.js', array('jquery', 'google-maps-api'));
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
		'supports' => array('title','thumbnail','editor'),
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

add_filter('manage_models_posts_columns', 'manufactuers_column_header', 10);
add_action('manage_models_posts_custom_column', 'manufactuers_column_content', 10, 2);

function manufactuers_column_header($defaults) {
	$defaults['manufacturers'] = 'Manufacturers';
	$defaults['types'] = 'Types';
	return $defaults;
}
function manufactuers_column_content($column_name, $post_ID) {
	if ($column_name == 'manufacturers') {
		$brands = get_brands($post_ID);
		if ($brands) {
			foreach ($brands as $brand) {
				echo $brand->name;
				echo ',';
			}
		}
	}
	if ($column_name == 'types') {
		$types = get_types($post_ID);
		if ($types) {
			foreach ($types as $type) {
				echo $type->name;
				echo ',';
			}
		}
	}
}



function get_brand($postID) {
	$brandlist =  wp_get_post_terms($postID, 'brands');
	if ($brandlist) {
		return $brandlist[0]->name;
	}
	else {
		return false;
	}
}

function get_brands($postID) {
	$brandlist =  wp_get_post_terms($postID, 'brands');
	if ($brandlist) {
		return $brandlist;
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

function array_sort($array, $on, $order=SORT_ASC)
{
	$new_array = array();
	$sortable_array = array();

	if (count($array) > 0) {
		foreach ($array as $k => $v) {
			if (is_array($v)) {
				foreach ($v as $k2 => $v2) {
					if ($k2 == $on) {
						$sortable_array[$k] = $v2;
					}
				}
			} else {
				$sortable_array[$k] = $v;
			}
		}

		switch ($order) {
			case SORT_ASC:
			asort($sortable_array);
			break;
			case SORT_DESC:
			arsort($sortable_array);
			break;
		}

		foreach ($sortable_array as $k => $v) {
			$new_array[$k] = $array[$k];
		}
	}

	return $new_array;
}

<<<<<<< HEAD
=======
function array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}

>>>>>>> origin/master
?>
