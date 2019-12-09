<?php
 /*
Template Name:about
*/ 

function mypage_head() {
    echo '<style>
    main{
        background: rgb(204,171,113);
background: linear-gradient(180deg, rgba(204,171,113,1) 0%, rgba(209,205,192,1) 69%, rgba(8,34,68,1) 100%);
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
    echo '<img src="'.get_template_directory_uri().'/img/about-banner.jpg" alt="" />';
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
    <?php if (have_posts()) : while (have_posts()) : the_post();?>


    <!--/*****************************content-page*************************/-->
    <div class="about about-page">
        <div class="container">
        <h1 class="th1">
                        <?php the_title(); ?>
                    </h1>
            <div class="row">
                <div class="col-xs-12 col-md-7">
                    
                   <div class="content">
                        <?php the_content(); ?>
</div>

</div>
                    <div class="col-xs-12 col-md-5">
                        <div class="image-wrapper">
                            <?php
                            if(has_post_thumbnail()){
    echo get_the_post_thumbnail(); 
    }else{
    echo '<img src="'.get_template_directory_uri().'/img/about-banner.jpg" alt="" />';
    }
    ?>
                        </div>
                        <!--image-wrapper-->
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