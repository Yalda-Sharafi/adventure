<?php get_header();
// global $job_manager, $post;

 setPostViews(get_the_ID());
?>




    <!--/*****************************banner*************************/-->
    <div class="banner-blog">
<?php
if(has_post_thumbnail()){
    echo get_the_post_thumbnail(); 
}else{
    echo '<img src="'. get_template_directory_uri() .'/img/question-answer-banner.jpg" alt="question-answer-banner" />';
}

?>
    
</div>
    <!--/*****************************breadcrumb*************************/-->
    <div class="banner-blog">

<?php the_breadcrumb(); ?>

</div>

    <!--/*****************************content-page*************************/-->
    <div class="container-fluid my-page">

        <div class="row single-page">

            <div class="col-xs-12 col-md-9 container-fluid">
                <div class="main-content">
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>

                    <div class="page-title col-12">
                        <h2 class="cat-title"><?php the_title(); ?> </h2>

                    </div>

                    <div class="page-content blog-content container-fluid">

                        <div class="col-xs-12 col-md-7 col-content">
                            <?php the_content(); ?>
                        </div>

                        <div class="col-xs-12 col-md-5 single-page-img">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <div class="post-option col-xs-12 col-md-12">
                            <date> <i class="far fa-calendar-alt"></i> <?php echo get_the_date( 'Y-m-d' );  ?> </date>
                                              
                                                <span class="post-code">   <i class="fas fa-file-alt" aria-hidden="true"></i>  <?php _e('post code');  echo get_the_ID(); ?> </span>
                           
<span class="post-view">   <i class="far fa-eye"></i></i> <?php _e('view');  ?>
                                             <?php  echo getPostViews(get_the_ID()); ?></span>
                        </div>


                        <div class="col-xs-12 col-md-12">
<div class="comments-template">
                        <?php
                        // if ( comments_open() || get_comments_number() ) :
     comments_template();
//  endif;
?>
</div><!--comments-->
</div><!--comments-col-->

                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
            <div class="d-none d-xs-none d-md-block col-md-3">
                <div class="content-sidebar page-sidebar">
                    <?php dynamic_sidebar('سایدبار آرشیو'); ?>

                </div>
            </div>
        </div>
    </div>
    <!--/*********************footer***************************/-->
<?php get_footer(); ?>