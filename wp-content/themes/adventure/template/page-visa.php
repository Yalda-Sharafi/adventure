<?php
 /*
Template Name:visa
*/ 

function mypage_head() {
    echo '<style>
    main{
        background: linear-gradient(180deg, rgba(204,171,113,1) 0%, rgba(227,217,199,1) 18%, rgba(0, 0, 0, 0.58) 100%);    
    .comments-template {
        background: rgb(255, 255, 255);
    }
</style>';
}

add_action('wp_head', 'mypage_head');

get_header(); ?>

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

    <!--/*****************************bradcrumb*************************/-->

<?php get_template_part('partial/breadcrumb'); ?>
  


<div class="my_page">
  


    <!--/*****************************content-page*************************/-->
    <div class="visa visa-page">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <div class="container">
        <h1 class="th1">
                        <!-- <?php the_title(); ?> -->
        </h1>

            <div class="row">
                <div class="col-12">
            



                    <?php  the_content(); ?>




                </div><!--col-->

            </div>
                <!--row-->
            </div>
            <!--container-->

            </div>
    <!--container-->
            <?php endwhile; endif; ?>
    </div>
    <!--visa visa-page-->
    </div>
    <!--my_page-->
    <?php get_footer(); ?>