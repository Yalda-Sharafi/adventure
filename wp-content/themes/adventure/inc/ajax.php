<?php
add_action('wp_ajax_nopriv_like_post','arvand_like_post');
add_action('wp_ajax_like_post','arvand_like_post');
add_action('wp_ajax_webramz_user_login','webramz_user_login');
add_action('wp_ajax_nopriv_webramz_user_login','webramz_user_login');


//like post
function arvand_like_post(){
    $current_user=wp_get_current_user();
    $post_id=intval($_POST['post_id']);
    if($post_id){
        $is_cookie_set= isset($_COOKIE['post-'.$post_id]) && intval($_COOKIE['post-'.$post_id]) ? true :false;
        if($is_cookie_set){
            $result=array('success'=>false , 'count' =>0);
            wp_die(json_encode($result));
        }
    $likes=set_post_likes($post_id);
    if($likes){
        $result=array('success'=>true , 'count' => $likes);
        
        //cookie
        setcookie('post-'.$post_id ,1,time()+(7*86400),'/');
        
        //DB
        global $wpdb,$table_prefix;
        $wpdb->insert($table_prefix.'posts_like',array('post_ID'=> $post_id , 'user_ID'=> $current_user->ID),array('%d', '%d'));
        
        
        
        
        
        
        
    }//if likes
    else{
        $result=array('success'=>false , 'count' =>0);
    }
    
    wp_die(json_encode($result));
    
}//post-id
}// functions


//login form


function webramz_user_login(){
    // var_dump($_POST);
    check_ajax_referer('ajax-calls','_nonce',true);
    
    $username=sanitize_text_field($_POST['username']);
    $password=sanitize_text_field($_POST['password']);
    $remember=isset($_POST['remember']);

    if(empty($username) || empty($password)){
        $result=array('error'=>true , 'message'=> 'فرم را تکمیل کنید');
        wp_send_json($result);
}

    $user=wp_authenticate_username_password(null,$username,$password);
    if(is_wp_error($user)){
        $result=array('error'=>true , 'message' => 'نام کاربری یا کلمه عبور اشتباه است');
        wp_send_json($result);
    }
        $creds=array('user_login'=>$username , 'user_password'=>$password , 'remember'=> $remember);
        $login_user=wp_signon($creds, false);
        if(is_wp_error($login_user)){
            $result=array('error'=>true ,'message'=>'نام کاربری یا کلمه عبور اشتباه است');
            wp_send_json($result);
        }
        $result=array('success'=>true ,'message'=>'لاگین شدید');
        wp_send_json($result);
    }

    
