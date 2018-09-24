<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
// Our custom post type function
function create_posttype() {
 
    register_post_type( 'Films',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Films' ),
                'singular_name' => __( 'Films' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'films'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
/*
* Creating a function to create our CPT
*/
 


function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Films', 'Post Type General Name', 'unit' ),
        'singular_name'       => _x( 'Films', 'Post Type Singular Name', 'unit' ),
        'menu_name'           => __( 'Films', 'unit' ),
        'parent_item_colon'   => __( 'Parent Films', 'unit' ),
        'all_items'           => __( 'All Films', 'unit' ),
        'view_item'           => __( 'View Films', 'unit' ),
        'add_new_item'        => __( 'Add New Films', 'unit' ),
        'add_new'             => __( 'Add New', 'unit' ),
        'edit_item'           => __( 'Edit Films', 'unit' ),
        'update_item'         => __( 'Update Films', 'unit' ),
        'search_items'        => __( 'Search Films', 'unit' ),
        'not_found'           => __( 'Not Found', 'unit' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'unit' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Films', 'unit' ),
        'description'         => __( 'Films news and reviews', 'unit' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
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
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'films', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );

 add_action( 'init', 'create_book_taxonomies', 0 );

 // create two taxonomies, genres and writers for the post type "book"
 function create_book_taxonomies() {
 // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Genres', 'taxonomy general name' ),
        'singular_name'     => _x( 'Genre', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Genres' ),
        'all_items'         => __( 'All Genres' ),
        'parent_item'       => __( 'Parent Genre' ),
        'parent_item_colon' => __( 'Parent Genre:' ),
        'edit_item'         => __( 'Edit Genre' ),
        'update_item'       => __( 'Update Genre' ),
        'add_new_item'      => __( 'Add New Genre' ),
        'new_item_name'     => __( 'New Genre Name' ),
        'menu_name'         => __( 'Genre' ),
    );
    
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'genre' ),
    );
    
    register_taxonomy( 'genre', array( 'films' ), $args );
    
    
    $labels = array(
        'name'              => _x( 'Country', 'taxonomy general name' ),
        'singular_name'     => _x( 'Country', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Countries' ),
        'all_items'         => __( 'All Countries' ),
        'parent_item'       => __( 'Parent Country' ),
        'parent_item_colon' => __( 'Parent Country:' ),
        'edit_item'         => __( 'Edit Country' ),
        'update_item'       => __( 'Update Country' ),
        'add_new_item'      => __( 'Add New Country' ),
        'new_item_name'     => __( 'New Country Name' ),
        'menu_name'         => __( 'Country' ),
    );
    
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'country' ),
    );
    
    register_taxonomy( 'country', array( 'films' ), $args );
    
    
    $labels = array(
        'name'              => _x( 'Year', 'taxonomy general name' ),
        'singular_name'     => _x( 'Year', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Years' ),
        'all_items'         => __( 'All Years' ),
        'parent_item'       => __( 'Parent Year' ),
        'parent_item_colon' => __( 'Parent Year:' ),
        'edit_item'         => __( 'Edit Year' ),
        'update_item'       => __( 'Update Year' ),
        'add_new_item'      => __( 'Add New Year' ),
        'new_item_name'     => __( 'New Year Name' ),
        'menu_name'         => __( 'Year' ),
    );
    
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'year' ),
    );
    
    register_taxonomy( 'year', array( 'films' ), $args );
    
    
    $labels = array(
        'name'              => _x( 'Actor', 'taxonomy general name' ),
        'singular_name'     => _x( 'Actor', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Actors' ),
        'all_items'         => __( 'All Actors' ),
        'parent_item'       => __( 'Parent Actor' ),
        'parent_item_colon' => __( 'Parent Actor:' ),
        'edit_item'         => __( 'Edit Actor' ),
        'update_item'       => __( 'Update Actor' ),
        'add_new_item'      => __( 'Add New Actor' ),
        'new_item_name'     => __( 'New Actor Name' ),
        'menu_name'         => __( 'Actor' ),
    );
    
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'actor' ),
    );
    
    register_taxonomy( 'actor', array( 'films' ), $args );
 }

function get_recent_films() {
    $film_args = array('post_type' => 'films', 'posts_per_page' => 5);
    $film_exc = new WP_Query($film_args);
    $html = '<div class="recent-films">';
    if($film_exc->have_posts()){
        $html .= '<ul>';
        while($film_exc->have_posts()){
            $film_exc->the_post();
            $film_id = get_the_ID();
            $html .= '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
        }
        $html .= '</ul>';
        wp_reset_query();
    }
    else{
        $html .= '<p>No Film Found.</p>';
    }
    return $html;
}
add_shortcode('get_recent_films', 'get_recent_films');