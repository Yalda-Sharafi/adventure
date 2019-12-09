<?php
 /*
Template Name:questions
*/ 

function mypage_head() {
    echo '<style>
    main{
        background: rgb(204,171,113);
        background: linear-gradient(180deg, rgba(204,171,113,1) 0%, rgba(227,217,199,1) 18%, rgba(8,34,68,1) 100%);
    }
    
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
    <div class="breadcrumb-wrapper">
<div class="container">
        <?php the_breadcrumb(); ?>
</div><!--container-->
    </div>


<div class="my_page">
  


    <!--/*****************************content-page*************************/-->
    <div class="questions questions-page">
        <div class="container">
        <h1 class="th1">
                        <?php the_title(); ?>
                    </h1>

            <div class="row">
            <div class="col-12">
            <div id="accordion">

            <?php if (have_rows('question-answer')) : while (have_rows('question-answer')) : the_row(); 
    $question=get_sub_field('question');
    $answer=get_sub_field('answer');

    ?>





    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapse<?php echo get_row_index(); ?>">
          <?php echo $question; ?>
        </a>
      </div><!--card-header-->
      <div id="collapse<?php echo get_row_index(); ?>" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <?php echo $answer; ?>
        </div><!--card-body-->
      </div><!--collapse-->
    </div><!--card-->


    <?php endwhile; endif; ?>

 </div><!--accordion-->

</div><!--col-->

                        <div class="col-xs-12 col-md-12">
<div class="comments-template">
                        <?php
                        // if ( comments_open() || get_comments_number() ) :
     comments_template();
//  endif;
?>
</div><!--comments-->
</div><!--comments-col-->



                </div>
                <!--row-->
            </div>
            <!--container-->
        </div>
        <!--questions-->













    </div>
    <!--my_page-->
    <?php get_footer(); ?>