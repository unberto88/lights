<?php 
// theme setup
function lights_setup_theme(){
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'blog-thumbnails', 809, 455, array( 'center', 'center' ) );
	add_image_size( 'blog-thumbnails-med', 302, 302, true );
	add_theme_support( 'title-tag' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-logo' );
	

	register_nav_menus( [
		'header_menu' => 'Header menu',
		'footer_menu' => 'Footer menu',
	] );

	
}
add_action( 'after_setup_theme', 'lights_setup_theme' );


// register_post_types
function register_post_types(){
	// register_post_type( 'news', [
	// 	'label'  => null,
	// 	'labels' => [
	// 		'name'               => 'News', 
	// 		'singular_name'      => 'News',
	// 		'add_new'            => 'Add news',
	// 		'add_new_item'       => 'Add news',
	// 		'edit_item'          => 'Edit Article',
	// 		'new_item'           => 'New Article',
	// 		'view_item'          => 'View Article',
	// 		'search_items'       => 'Search News',
	// 		'not_found'          => 'News not found',
	// 		'not_found_in_trash' => 'No News found in Trash',
	// 		'menu_name'          => 'News',
	// 	],
	// 	'description'         => '',
	// 	'public'              => true,
	// 	'show_in_menu'        => true,
	// 	'show_in_rest'        => true,
	// 	'capability_type'   => 'post',
	// 	'hierarchical'        => false,
	// 	'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'author', 'excerpt' ], // 'trackbacks','comments','revisions','page-attributes','post-formats'
	// 	'taxonomies'          => [ 'category', 'post_tag' ],
	// 	'has_archive'         => true,
	// ] );

	register_post_type( 'clients', [
		'label'  => null,
		'labels' => [
			'name'               => 'Clients', 
			'singular_name'      => 'Client',
			'add_new'            => 'Add new Client',
			'add_new_item'       => 'Add new Clients',
			'edit_item'          => 'Edit Clients',
			'new_item'           => 'New Clients',
			'view_item'          => 'View Client',
			'search_items'       => 'Search Clients',
			'not_found'          => 'Clients not found',
			'not_found_in_trash' => 'No Clients found in Trash',
			'menu_name'          => 'Clients',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true,
		'show_in_rest'        => true,
		'capability_type'   => 'post',
		'hierarchical'        => false,
		'supports'            => [ 'title',  'thumbnail' ], 
		'taxonomies'          => [],
		'has_archive'         => true,
	] );

	register_post_type( 'merch', [
		'label'  => null,
		'labels' => [
			'name'               => 'Merch', 
			'singular_name'      => 'Merch',
			'add_new'            => 'Add Merch',
			'add_new_item'       => 'Add Merch',
			'edit_item'          => 'Edit Merch',
			'new_item'           => 'New Merch',
			'view_item'          => 'View Merch',
			'search_items'       => 'Search Merch',
			'not_found'          => 'Merch not found',
			'not_found_in_trash' => 'No Merch found in Trash',
			'menu_name'          => 'Merch.',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true,
		'show_in_rest'        => true,
		'capability_type'   => 'post',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
		'taxonomies'          => [],
		'has_archive'         => true,
	] );

}
add_action( 'init', 'register_post_types' );


// load theme styles and scripts
function load_theme_scripts() {
	wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(),  );
	wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/js/swiper-bundle.min.js', '', '', true);
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css', array(), time() );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'load_theme_scripts' );


require_once( get_template_directory() . '/inc/functions-disabling.php' );
require_once( get_template_directory() . '/inc/functions-options.php' );


add_action( 'widgets_init', 'lights_register_widgets' );
function lights_register_widgets(){
	register_sidebar( array(
		'name'          => 'Sidebar News',
		'id'            => "sidebar_news",
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
	) );
	register_sidebar( array(
		'name'          => 'Sidebar Footer',
		'id'            => "sidebar_footer",
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		
	) );
}

