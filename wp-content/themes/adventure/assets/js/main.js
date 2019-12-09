jQuery(document).ready(function($){
    
    //like-posts
    $(document).on('click','.link-like',function(event){
        event.preventDefault();
        var $this=$(this);                    
        var $post_id= $this.data('pid');
        if(parseInt($this.data('liked'))){
            $this.addClass('red');
            alert('نظر شما ثبت شده است.');
            //return false;
        }
        $.ajax({
            url: data.ajax_url,
            type:'post',
            dataType:'json',
            data:{
            action:'like_post',
            post_id:$post_id
            },
            success:function(response){
                if(response.success){
                    $this.find('i').text(response.count);
                    $this.data('liked',1);
                }
            },
            error:function(){}
        }) //ajax
    })//on click link-like
    
    
    
    //login-form
//     $(document).on('submit', function(event){
//         event.preventDefault();
//         var $this=$(this);
//         var $username=$this.find('#username').val();
//         var $password=$this.find('#password').val();
//         var $remember=$this.find('#rememberme').prop('checked');
//         var $nonce=$('meta[name="_nonce"]').attr('content');
//         var $message = $('.login-message');
//         $message.slideUp(300);
//         alert($username);
//       alert($password);

//         //alert($message);
//         //alert($nonce);
//         //console.log($remember);

//         if($username==="" || $password===""){
//             $message.html('<p> لطفا فیلدهای درخواستی را پر کنید </p>').slideDown(300);
//             return false;
//         }
//         //alert ($nonce);

//         $.ajax({
//             url:data.ajax_url,
//             type:'post',
//             dataType:'json',
//             data:{
//                 action:'webramz_user_login',
//                 username: $username,
//                 password: $password,
//                 remember: $remember,
//                 _nonce:$nonce
//             },
//             success:function(response){
//                 if(response.error){
//                     $message.html('<p>'+ response.message +'</p>').slideDown(300);
//                             }               
//                 if(response.success){
//                     $message.removeClass('error').addClass('success').html('<p> +response.message+ </p>');
//                     window.location.href='http://7learn.dev/profile';
//                 }
//             },
//             error:function(){}
            
//         });//ajax login
        
        
//     }); // on clik sl_login_form
    
    
 }); //jquery