<?php
add_action( 'init', 'codex_places_init' );
/**
 * Register a places post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_places_init() {
    $labels = array(
        $labels = array(
            'name'                => _x( 'place', 'Post Type General Name', 'adventure' ),
            'singular_name'       => _x( 'place', 'Post Type Singular Name', 'adventure' ),
            'menu_name'           => __( 'place', 'adventure' ),
            'parent_item_colon'   => __( 'Parent place', 'adventure' ),
            'all_items'           => __( 'All place', 'adventure' ),
            'view_item'           => __( 'View place', 'adventure' ),
            'add_new_item'        => __( 'Add New place', 'adventure' ),
            'add_new'             => __( 'Add New', 'adventure' ),
            'edit_item'           => __( 'Edit place', 'adventure' ),
            'update_item'         => __( 'Update place', 'adventure' ),
            'search_items'        => __( 'Search place', 'adventure' ),
            'not_found'           => __( 'Not Found', 'adventure' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'adventure' )
        ),

    $args = array(
        'label'               => __('MyPostType', 'key'),
        'description'         => __('MyPostType', 'key'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields'),
         'taxonomies'          => array('post_tag'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-tools',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,

        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'rewrite'            => array( 'slug' => 'places' ),
    ),
);
    register_post_type( 'places', $args );
}



// custom taxonomies

add_action( 'init', 'create_places_taxonomy' );

function create_places_taxonomy() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name' => _x( 'place category', 'taxonomy general name' ),
        'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search place' ),
        'all_items' => __( 'All place' ),
        'parent_item' => __( 'Parent Topic' ),
        'parent_item_colon' => __( 'Parent Topic:' ),
        'edit_item' => __( 'Edit Topic' ), 
        'update_item' => __( 'Update Topic' ),
        'add_new_item' => __( 'Add New Topic' ),
        'new_item_name' => __( 'New Topic Name' ),
        'menu_name' => __( 'place category' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'places-tax' ),
    );
    register_taxonomy( 'places-tax', array( 'places' ), $args );



}









