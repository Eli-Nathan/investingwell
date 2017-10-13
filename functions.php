<?php
// Add scripts and stylesheets
function include_investingwell_scripts() {
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, NULL, 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
	wp_deregister_script( 'jquery' );
  	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', false, NULL, true );
   	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', '', '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'include_investingwell_scripts' );

?>
