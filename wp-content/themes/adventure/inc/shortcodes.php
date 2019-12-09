<?php

//login form shortcode

function sl_login_form_callback( $atts , $content=null){
    ob_start();
    include get_template_directory().'/tpl/login.php';
    $login_form_html=ob_get_clean();
    return $login_form_html;
    
}

add_shortcode('sl_login_form','sl_login_form_callback');