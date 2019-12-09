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

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-9">
                    <div class="news-right">

                           <h1><?php
                        
                        if (is_category() || is_single() ){
           echo single_cat_title( '', true );
        //    echo  count_cat_post(' ');
        }
                        ?></h1>

                        <?php


                        if ( have_posts() ) {
                            // The Loop
                            while ( have_posts() ) { the_post();

                                ?>

                                <!--/*REPEAT*/-->
                                <div class="col-12">
                                    <div class="news-box">

                                        <h2><i class="fas fa-file-alt"></i> <?php echo get_the_title(); ?> </h2>
                                        <div class="single-news-content archive row">

                                            <div class="col-xs-12 col-md-5">
                                                <?php echo get_the_post_thumbnail(); ?>
                                            </div><!--col-md-5-->
                                            <div class="col-xs-12 col-md-6">
                                                <div class="left-single-news-content">
                                                   
                                                    <p>
                                                        <?php
                                                        $content=wp_trim_words(get_the_content());
                                                        $content_length=strlen($content);
                                                        if($content_length<50){
                                                            echo '';
                                                        }else{

                                                            echo wp_trim_words(get_the_content(), 40, null);
                                                        }
                                                        ?>

                                                    </p>
                                                    <button class="button"><a href="<?php echo get_post_permalink() ?>">مشاهده
                                                            جزئیات</a></button>
                                                </div>
                                            </div><!--col-md-7-->




<div class="col-xs-12 col-md-12">
                                            <div class="post-option-archive" id="news-front-date">
                                              <date> <i class="far fa-calendar-alt"></i> <?php echo get_the_date( 'Y-m-d' );  ?> </date>
                                              
                                                <span class="post-code">   <i class="fas fa-file-alt" aria-hidden="true"></i>  کد خبر: <?php echo get_the_ID(); ?> </span>

                                              
                                                
                                                <span class="post-view">   <i class="far fa-eye"></i></i>  بازدید: 
                                             <?php  echo getPostViews(get_the_ID()); ?></span>
                                             
                                            </div>

                                        </div>

















                                        </div><!--single-news-content-->
                                    </div><!--news-box-->
                                </div><!--col-md-6-->
                                <!--/*REPEAT*/-->


                                <?php

                            }

                            /* Restore original Post Data
                             * NB: Because we are using new WP_Query we aren't stomping on the
                             * original $wp_query and it does not need to be reset with
                             * wp_reset_query(). We just need to set the post data back up with
                             * wp_reset_postdata().
                             */
                            wp_reset_postdata();
//                            <!-- pagination -->
                            the_posts_pagination( array(
                                'mid_size'  => 2,
                                'prev_text' => __( 'نوشته های قبلی', 'textdomain' ),
                                'next_text' => __( 'نوشته های بعدی', 'textdomain' ),
                            ) );
                        }
                        ?>


                    </div><!--news-right-->
                </div><!--col-md-9-->
                <div class="col-md-3">

                    <div class="archive-sidebar">



                        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                            <?php dynamic_sidebar( 'سایدبار آرشیو' ); ?>
                        </div><!-- #primary-sidebar -->



                    </div>

                </div><!--col-md-3-->

            </div><!--row-->
        </div><!--container-->
    </div><!--news-->

    <!--/*********************footer***************************/-->
<?php get_footer(); ?>