<?php
 /*
Template Name:about
*/ 

// function mypage_head() {
//     echo '<style>
//     main{
//         background: rgb(204,171,113);
// background: linear-gradient(180deg, rgba(204,171,113,1) 0%, rgba(209,205,192,1) 69%, rgba(8,34,68,1) 100%);
//     }
    
// </style>';
// }

// add_action('wp_head', 'mypage_head');
get_header(); ?>

<!--/*****************************banner*************************/-->
<div class="banner-blog">
    
    <?php
    if(has_post_thumbnail()){
    echo get_the_post_thumbnail(); 
    }else{
    echo '<img src="'.get_template_directory_uri().'/img/about-banner.jpg" alt="" />';
    }
    ?>
    
</div>

    <!--/*****************************bradcrumb*************************/-->
  <?php get_template_part('partial/breadcrumb'); ?>


<div class="my_page">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>


    <!--/*****************************content-page*************************/-->
    <div class="about about-page">
        <!-- /*why adventure*/ -->
        <div class="w-adventure p-100">
            <div class="container">
                <h1 class="th1 text-center"><?php echo the_field('specialise_header','5'); ?></h1>
                <h2 class="th2 text-center"><?php echo the_field('specialise_sub_header','5'); ?></h2>
                <div class="adventures">
                    <div class="row">
                    
                    <?php
$posts=get_field('advantage','5');
if($posts){
  foreach($posts as $post){
    setup_postdata($post);  

?>
                        <div class="col-xs-12 col-md-4">
                        <a href="<?php echo get_the_permalink();?>" title="adventure-link" >
                            <div class="adventure">
                                <div class="adventure-img"> 
                                <?php echo get_the_post_thumbnail(); ?>
                                </div>
                                <div class="adventure-info">
                                    <h1 class="th1  text-center"><?php the_title(); ?></h1>
                                    <h2 class="text-center">
                                        
                                    <?php echo wp_trim_words( get_the_content(), 15, '...' ); ?>
                                    </h2>
                                </div>
                                <!--article-info-->
                            </div>
                            <!--adventure-->
  </a>
                        </div>
                        <!--col-->
                        <?php
                    }
            wp_reset_postdata();

          }
?>
                    </div>
                    <!--row-->
                </div>
                <!--articles-->

            </div>
            <!--container-->
        </div>
        <!--w-adventure-->


        <div class="container">
        <h1 class="th1">
                        <?php the_title(); ?>
         </h1>



            <div class="row">
                <div class="col-xs-12 col-md-7">
                    
                   <div class="content">
                        <?php the_content(); ?>
</div><!--content-->

</div><!--col-->
                    <div class="col-xs-12 col-md-5">
         
                    

                    <div class="contact social-media">
                    <a href="<?php echo get_theme_mod('tripadvisor'); ?>" class="footer-btn"><img src="<?php echo get_template_directory_uri()?>/img/tripAdvisor.png" class="foot-btn" alt="tripAdvisor-btn" /> </a>
                    <a href="<?php echo get_theme_mod('whats-app'); ?>" class="footer-btn"><img src="<?php echo get_template_directory_uri()?>/img/Whatsapp.png" class="foot-btn" alt="Whatsapp-btn" /> </a>
                    <a href="<?php echo get_theme_mod('facebook'); ?>" title=""><span class="dashicons dashicons-facebook-alt"></span></a>
                    <a href="<?php echo get_theme_mod('instagram'); ?>" title=""><span class="iconify" data-icon="dashicons-instagram" data-inline="false"></span></a>
                    <a href="<?php echo get_theme_mod('youtube'); ?>" title=""><span class="dashicons dashicons-video-alt3"></span></a>
                    </div>




                    </div>
                    <!--col2-->

                </div>
                <!--container-->
            </div>
            <!--row-->
        </div>
        <!--about-->













        <?php endwhile; endif; ?>
    </div>
    <!--my_page-->
    <?php get_footer(); ?>