<?php
add_action( 'wp_enqueue_scripts', 'supplier_theme_css',999);
function supplier_theme_css() {
    wp_enqueue_style( 'supplier-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'supplier-child-style', get_stylesheet_uri(), array( 'supplier-parent-style' ) );
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'supplier-default-css', get_stylesheet_directory_uri()."/css/colors/default.css" );
	wp_dequeue_style( 'default',get_template_directory_uri() .'/css/colors/default.css');
}
?>