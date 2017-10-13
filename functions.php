<?php
// Add scripts and stylesheets
function include_investingwell_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, NULL, 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
	 wp_enqueue_script("jquery");
}
add_action( 'wp_enqueue_scripts', 'include_investingwell_scripts' );

?>
