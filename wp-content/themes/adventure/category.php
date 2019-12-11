<?php get_header();
?>


    <!--/*****************************banner*************************/-->
    <div class="banner-blog">

        <img src="<?php echo bloginfo('template_url'); ?>/img/archive-banner.jpg" alt=""/>

    </div>

    <!--/*****************************banner*************************/-->
    <div class="banner-blog">

        <?php the_breadcrumb(); ?>

    </div>
    <!--/****************************************news**************************************************?/-->
    <div class="archive news">
        
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
            'posts_per_page' => 3,
            'paged'          => $paged,

            
        );

        $the_query = new WP_Query( $args );
        ?>

        <div class="container">
        <h1 class="th1"><?php
                        
                        if (is_category() || is_single() ){
           echo single_cat_title( '', true );
        //    echo  count_cat_post(' ');
        }
                        ?></h1>
            <div class="row">
                <div class="col-xs-12 col-md-9">
                    <div class="news-right">
<?php

                    get_template_part('loops/loop'); 

                    get_template_part('partial/pagination');


?>







                        


                    </div><!--news-right-->
                </div><!--col-md-9-->
                <div class="col-md-3">
               
                <?php get_template_part('partial/archive-sidebar');  ?>

                </div><!--col-md-3-->

            </div><!--row-->
        </div><!--container-->
    </div><!--news-->

    <!--/*********************footer***************************/-->
<?php get_footer(); ?>