<?php
add_action( 'init', 'codex_specialise_init' );
/**
 * Register a specialise post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_specialise_init() {
    $labels = array(
        $labels = array(
            'name'                => _x( 'specialise', 'Post Type General Name', 'adventure' ),
            'singular_name'       => _x( 'specialise', 'Post Type Singular Name', 'adventure' ),
            'menu_name'           => __( 'specialise', 'adventure' ),
            'parent_item_colon'   => __( 'Parent specialise', 'adventure' ),
            'all_items'           => __( 'All specialise', 'adventure' ),
            'view_item'           => __( 'View specialise', 'adventure' ),
            'add_new_item'        => __( 'Add New specialise', 'adventure' ),
            'add_new'             => __( 'Add New', 'adventure' ),
            'edit_item'           => __( 'Edit specialise', 'adventure' ),
            'update_item'         => __( 'Update specialise', 'adventure' ),
            'search_items'        => __( 'Search specialise', 'adventure' ),
            'not_found'           => __( 'Not Found', 'adventure' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'adventure' )
        )
    );

    $args = array(
        'label'               => __('specialise', 'key'),
        'description'         => __('specialise', 'key'),
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
        'rewrite'            => array( 'slug' => 'specialise' ),
    );

    register_post_type( 'specialise', $args );
}



// custom taxonomies

add_action( 'init', 'create_specialise_taxonomy' );

function create_specialise_taxonomy() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name' => _x( 'specialise', 'taxonomy general name' ),
    'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search specialise' ),
    'all_items' => __( 'All specialise' ),
    'parent_item' => __( 'Parent Topic' ),
    'parent_item_colon' => __( 'Parent Topic:' ),
    'edit_item' => __( 'Edit Topic' ), 
    'update_item' => __( 'Update Topic' ),
    'add_new_item' => __( 'Add New Topic' ),
    'new_item_name' => __( 'New Topic Name' ),
    'menu_name' => __( 'specialise' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'specialise' ),
    );
    register_taxonomy( 'specialise', array( 'specialise' ), $args );



}









