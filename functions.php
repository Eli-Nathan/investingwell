<?php
// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );
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

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');
// Bootstrap navigation
function bootstrap_nav()
{
	wp_nav_menu( array(
            'theme_location'    => 'header-menu',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
    );
}
function bootstrap_footer()
{
	wp_nav_menu( array(
            'theme_location'    => 'footer-menu',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
    );
}

function menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'menus' );

// Remove comments links from admin bar
function df_disable_comments_admin_bar() {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
}
add_action('init', 'df_disable_comments_admin_bar');


// Add Charity post type
function charity_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Charity', 'Post Type General Name', 'investingwell' ),
        'singular_name'       => _x( 'Charity', 'Post Type Singular Name', 'investingwell' ),
        'menu_name'           => __( 'Charities', 'investingwell' ),
        'parent_item_colon'   => __( 'Parent Charity', 'investingwell' ),
        'all_items'           => __( 'All Charities', 'investingwell' ),
        'view_item'           => __( 'View Charity', 'investingwell' ),
        'add_new_item'        => __( 'Add New Charity', 'investingwell' ),
        'add_new'             => __( 'Add New', 'investingwell' ),
        'edit_item'           => __( 'Edit Charity', 'investingwell' ),
        'update_item'         => __( 'Update Charity', 'investingwell' ),
        'search_items'        => __( 'Search Charity', 'investingwell' ),
        'not_found'           => __( 'Not Found', 'investingwell' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'investingwell' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'charity', 'investingwell' ),
        'description'         => __( 'Charities we work with', 'investingwell' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        // 'taxonomies'          => array( 'types' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );

    // Registering your Custom Post Type
    register_post_type( 'charity', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'charity_post_type', 0 );

function filter_ptags_on_images($content){
    return preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '\1', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

add_filter( 'wpcf7_form_elements', 'remove_attr_size' );
	function remove_attr_size( $content ) {
		$content = preg_replace('/ size=".*?"/i', ' size="100"', $content);
		return $content;
	}


?>
