<?php
add_action( 'init', 'codex_tours_init' );
/**
 * Register a tours post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_tours_init() {
    $labels = array(
        'name'                => _x( 'tour', 'Post Type General Name', 'adventure' ),
            'singular_name'       => _x( 'tour', 'Post Type Singular Name', 'adventure' ),
            'menu_name'           => __( 'tour', 'adventure' ),
            'parent_item_colon'   => __( 'Parent tour', 'adventure' ),
            'all_items'           => __( 'All tour', 'adventure' ),
            'view_item'           => __( 'View tour', 'adventure' ),
            'add_new_item'        => __( 'Add New tour', 'adventure' ),
            'add_new'             => __( 'Add New', 'adventure' ),
            'edit_item'           => __( 'Edit tour', 'adventure' ),
            'update_item'         => __( 'Update tour', 'adventure' ),
            'search_items'        => __( 'Search tour', 'adventure' ),
            'not_found'           => __( 'Not Found', 'adventure' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'adventure' )
    );

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
        'rewrite'            => array( 'slug' => 'tours' ),
    );

    register_post_type( 'tours', $args );
}



// custom taxonomies

add_action( 'init', 'create_tours_taxonomy' );

function create_tours_taxonomy() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name' => _x( 'tour category', 'taxonomy general name' ),
        'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search tour' ),
        'all_items' => __( 'All tour' ),
        'parent_item' => __( 'Parent Topic' ),
        'parent_item_colon' => __( 'Parent Topic:' ),
        'edit_item' => __( 'Edit Topic' ), 
        'update_item' => __( 'Update Topic' ),
        'add_new_item' => __( 'Add New Topic' ),
        'new_item_name' => __( 'New Topic Name' ),
        'menu_name' => __( 'tour category' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'tours' ),
    );
    register_taxonomy( 'tours', array( 'tours' ), $args );



}









