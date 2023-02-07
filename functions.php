<?php
/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support('title-tag');


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Richmond Hill ATA' ),
    'footer1' => __( 'Footer Menu Column 1','Richmond Hill ATA'),
    'footer2' => __( 'Footer Menu Column 2','Richmond Hill ATA'),
    'footer3' => __( 'Footer Menu Column 3','Richmond Hill ATA'),
    // 'footer4' => __( 'Footer Menu Column 4','Richmond Hill ATA'),
) );

// Add Thumbnail Support
add_theme_support('post-thumbnails');

add_image_size('home-slider-img',520,520);
// Our custom post type function
function create_posttype_homeslideshow() {
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('Home Page Slideshow', 'Post Type General Name'),
        'singular_name'       => _x('Home Page Slideshow', 'Post Type Singular Name'),
        'menu_name'           => __('Home Page Slideshow'),
        'all_items'           => __('All Slideshow Items'),
        'view_item'           => __('View Slideshow Items'),
        'add_new_item'        => __('Add New Slideshow Element'),
        'add_new'             => __('Add New'),
        'edit_item'           => __('Edit Slideshow Element'),
        'update_item'         => __('Update Slideshow Element'),
        'search_items'        => __('Search Slideshow Elements'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    $args = array(
        'label'               => __('home_slideshow'),
        'description'         => __('Slideshow Items on the Home Page'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title','editor','thumbnail','page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('genres'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        // 'menu_position'       => 5,
        'can_export'          => true,
        // 'has_archive'         => true,
        'exclude_from_search' => false,
        // 'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'home_slideshow', $args );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_homeslideshow' );


function create_posttype_programs() {
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('Programs', 'Post Type General Name'),
        'singular_name'       => _x('Program', 'Post Type Singular Name'),
        'menu_name'           => __('Programs'),
        'all_items'           => __('All Program Items'),
        'view_item'           => __('View Program Items'),
        'add_new_item'        => __('Add New Program Item'),
        'add_new'             => __('Add New'),
        'edit_item'           => __('Edit Program Item'),
        'update_item'         => __('Update Program Item'),
        'search_items'        => __('Search Program Items'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    $args = array(
        'label'               => __('programs'),
        'description'         => __('Programs'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title','editor','thumbnail','page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('genres'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        // 'menu_position'       => 5,
        'can_export'          => true,
        // 'has_archive'         => true,
        'exclude_from_search' => false,
        // 'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'programs', $args );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_programs' );

function create_posttype_instructors() {
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('Instructors', 'Post Type General Name'),
        'singular_name'       => _x('Instructors', 'Post Type Singular Name'),
        'menu_name'           => __('Instructors'),
        'all_items'           => __('All Instructors'),
        'view_item'           => __('View Instructors'),
        'add_new_item'        => __('Add New Instructor'),
        'add_new'             => __('Add New'),
        'edit_item'           => __('Edit Instructor'),
        'update_item'         => __('Update Instructor'),
        'search_items'        => __('Search Instructors'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    $args = array(
        'label'               => __('instructors'),
        'description'         => __('ATA Martial Arts Instructors'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title','editor','thumbnail','page-attributes','custom-fields'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('genres'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        // 'menu_position'       => 5,
        'can_export'          => true,
        // 'has_archive'         => true,
        'exclude_from_search' => false,
        // 'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'instructors', $args );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_instructors' );

?>