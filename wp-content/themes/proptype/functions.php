<?php
function propType_theme_support() {
	// Adds dynamic support
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','propType_theme_support');

function propType_register_styles() {
	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'propType-Bootstrap', get_template_directory_uri() . "/assets/vendor/bootstrap/css/bootstrap.min.css", array(), '4.5.0', 'all' );
	wp_enqueue_style( 'propType-IcoFont', get_template_directory_uri() . "/assets/vendor/icofont/icofont.min.css", array(), '1.0.1', 'all' );
	wp_enqueue_style( 'propType-FontAwesome', get_template_directory_uri() . "/assets/vendor/font-awesome/css/font-awesome.min.css", array(), '4.7.0', 'all' );
	wp_enqueue_style( 'propType-Aos', get_template_directory_uri() . "/assets/vendor/aos/aos.css", array(), '1.0', 'all' );
	wp_enqueue_style( 'propType-style', get_template_directory_uri() . "/assets/css/style.css", array(
		'propType-Bootstrap',
		'propType-IcoFont',
		'propType-FontAwesome',
		'propType-Aos',
	), $version, 'all' );
}

add_action( 'wp_enqueue_scripts', 'propType_register_styles' );

function propType_register_scripts() {
	wp_enqueue_script( 'propType-jQuery', get_template_directory_uri() . "/assets/vendor/jquery/jquery.min.js", array(), '3.5.1', true );
	wp_enqueue_script( 'propType-jQuery-Bundle', get_template_directory_uri() . "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js", array(), '4.5.0', true);
	wp_enqueue_script( 'propType-jQuery-Easing', get_template_directory_uri() . "/assets/vendor/jquery.easing/jquery.easing.min.js", array(), '1.0', true );
	wp_enqueue_script( 'propType-JQuery-Sticky', get_template_directory_uri() . "/assets/vendor/jquery-sticky/jquery.sticky.js", array(), '1.0.4', true );
	wp_enqueue_script( 'propType-Aos', get_template_directory_uri() . "/assets/vendor/aos/aos.js", array(), '1.0', true );
	wp_enqueue_script( 'propType-Main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'propType_register_scripts' );

function propType_register_nav_menu(){
	register_nav_menus( array(
		'primary_menu' => __( 'Primary Menu Top Right', 'text_domain' ),
		'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
	) );
}
add_action( 'after_setup_theme', 'propType_register_nav_menu', 0 );


function clear_nav_menu_item_id($id, $item, $args) {
	return "";
}
add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);


function clear_nav_menu_item_class($classes, $item, $args) {
	return array();
}
add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);

//[get images url]
function propType_Get_Upload_directory(){
	$path = wp_get_upload_dir();
	return $path['baseurl'];
}
add_shortcode( 'GetUploadDirectory', 'propType_Get_Upload_directory' );
