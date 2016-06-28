<?php

define("IRIS_URL", get_template_directory());

// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');

function my_acf_settings_path( $path ) {

    // update path
	$path = get_template_directory() . '/acf/';

    // return
	return $path;

}


// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');

function my_acf_settings_dir( $dir ) {

    // update path
	$dir = get_template_directory_uri() . '/acf/';

    // return
	return $dir;

}


// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');


// 4. Include ACF
include_once( IRIS_URL . '/acf/acf.php' );


//5. Add an options page

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Design Options');
	acf_add_options_page('Content Options');
}


//6. Get FieldSets
include_once( IRIS_URL . '/acf/model-info.php' );
include_once( IRIS_URL . '/acf/brand-info.php' );
include_once( IRIS_URL . '/acf/type-info.php' );
include_once( IRIS_URL . '/acf/content-info.php' );
include_once( IRIS_URL . '/acf/design-info.php' );
?>
