<?php

require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/sidebar.php';
// require_once get_template_directory() . '/inc/dashboard-widgetes.php';

//add feature images
add_theme_support( 'custom-logo' );
add_theme_support('post-thumbnails');


// register menus
function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'my-custom-menu' => __( 'منوی صفحه نخست' ),
        'extra-menu' => __( 'منوی ثانویه' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );


//custome post type
include 'inc/custom-post-type-tours.php';
include 'inc/custom-post-type-places.php';
include 'inc/custom-post-type-specialise.php';

//add custome post type to category
function namespace_add_custom_types( $query ) {
    if( (is_category() || is_tag()) && $query->is_archive() && empty( $query->query_vars['suppress_filters'] ) ) {
        $query->set( 'post_type', array(
             'post','carousel','tours'
        ));
    }
    return $query;
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );



/*=============================================
=            BREADCRUMBS			            =
=============================================*/
//  to include in functions.php
function the_breadcrumb() {
    $sep = ' > ';
    if (!is_front_page()) {

        // Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;

        // Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category(' آرشیو: ');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }

        // If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }

        // If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }

        // if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) {
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
        echo '</div>';
    }
}



//showing view of posts
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 ";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// excerpt-length
function wp_example_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wp_example_excerpt_length');


/*change image login*/

function custom_login_img() {
   echo '<style>#login h1 a {background-size: cover;
    width: 100%;
    height: 125px;background-image:url('.get_bloginfo('template_directory').'/img/logo.png)}</style>';
 }
 
add_filter('login_head', 'custom_login_img', 999);



/**
 * Adding White Label Branding for Dashboard
 */
 function admin_logo() {
     echo '<br/> <img src="'.get_bloginfo('template_directory').'/img/webramz-logo.png"'.' />';  
 }
add_action( 'admin_notices', 'admin_logo' );




/*translate*/
function arvand_setup_theme(){
    load_theme_textdomain('arvand',get_template_directory().'/langs/');
}
add_action('after_setup_theme','arvand_setup_theme');


/*users*/



/*
* Credit: http://www.thatweblook.co.uk/blog/tutorials/tutorial-wordpress-breadcrumb-function/
*/


// $d = ‘Y/f/j’;
// $date = date($d);
// apply_filters(‘the_date’, $date,$d);


//showing category posts number
// function count_cat_post($category) {
// if(is_string($category)) {
//     $catID = get_cat_ID($category);
// }
// elseif(is_numeric($category)) {
//     $catID = $category;
// } else {
//     return 0;
// }
// $cat = get_category($catID);
// return $cat->count;
// }










