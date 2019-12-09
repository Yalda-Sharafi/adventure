<?php
function add_theme_scripts(){
    wp_enqueue_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('slick-css',get_template_directory_uri().'/assets/slick/slick.css');
    wp_enqueue_style('slick-css-theme',get_template_directory_uri().'/assets/slick/slick-theme.css');
    wp_enqueue_style('webramz-theme',get_template_directory_uri().'/assets/css/adventure-theme.css');

    // wp_enqueue_style('animate-css','https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css');
    
    


    wp_register_script( 'jq-t', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js','','',true);
    wp_enqueue_script('jq-t');
    wp_register_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js','','',true);
    wp_enqueue_script('popper');
    wp_register_script('bootstrap-js','https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js','','',true);
    wp_enqueue_script('bootstrap-js');
        // wp_register_script('font-awsome','https://kit.fontawesome.com/d1618b732d.js','','',true);
    wp_enqueue_script('font-awsome');
    wp_register_script('slick',get_template_directory_uri().'/assets/slick/slick.min.js','','',true);
    wp_enqueue_script('slick');
    
    
    
    
    // wp_localize_script('main-js','data',array(

    //     'ajax_url' =>  admin_url('admin-ajax.php'),

    // ));
    
    // wp_register_script('main-js',get_template_directory_uri().'/assets/js/main.js','','',true);
    // wp_enqueue_script('main-js');
    // wp_localize_script('main-js','data',array('ajax_url'=>admin_url('admin-ajax.php')));

    
    wp_register_script('adventure-theme',get_template_directory_uri().'/assets/js/adventure-theme.js','','',true);
    wp_enqueue_script('adventure-theme');
    

/*wp_register_script( 'aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', '' , false, true );
wp_enqueue_script('aos-js');*/


    

}
add_action('wp_enqueue_scripts','add_theme_scripts');