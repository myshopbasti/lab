<?php


// load css
function load_css(){

	// wp_register_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css', array(), false, 'all');
	// wp_enqueue_style('bootstrap');

	wp_register_style('main_css', get_template_directory_uri(). '/main.css', array(), false, 'all');
	wp_enqueue_style('main_css');

	wp_register_style('responsive_css', get_template_directory_uri(). '/responsive.css', array(), false, 'all');
	wp_enqueue_style('responsive_css');

}
add_action('wp_enqueue_scripts','load_css');


// load js
function load_js(){

	// wp_register_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js','jquery',false,true);
	// wp_enqueue_script('bootstrap');

	wp_register_script('main_js', get_template_directory_uri(). '/main.js','jquery',false,true);
	wp_enqueue_script('main_js');

}
add_action('wp_enqueue_scripts','load_js');

// Theme options
add_theme_support('menus');

// menus
register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
		'footer-menu' => 'Footer Menu Location',
	)
);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


add_theme_support( 'post-thumbnails' );

add_post_type_support( 'product', 'thumbnail' );



// custom post type product
function my_first_post_type(){

	$args = array(

		'labels' => array(
			'name' => 'Products',
			'singular_name' => 'Product',
		),
		'hierarchical' => true,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-hourglass',
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
		// 'rewrite' => array('slug' => 'products'),

	);

	register_post_type('products',$args);

}
add_action('init','my_first_post_type');


function my_first_taxonomy(){

	$args = array(
			'labels' => array(
				'name' => 'Types',
				'singular_name' => 'Type',
		),
			'public' => true,
			'hierarchical' => true,
	);

	register_taxonomy('types',array('products'),$args);

}
add_action('init','my_first_taxonomy');


// Breadcrumb
