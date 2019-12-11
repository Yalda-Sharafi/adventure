<?php get_header();
?>


    <!--/*****************************banner*************************/-->


    <!--/*****************************banner*************************/-->

    <!--/****************************************news**************************************************?/-->

        <!-- /*slider*/ -->
<div class="category-banner" style="background:url('<?php echo get_template_directory_uri() ?>/img/tours-page/category-banner.png');">

</div>
        <!--slider-->




        <div class="tour-page-content p-7">
            <div class="container">

                        
                            <h1 class="th1 tours-page-header"> The Good Life </h1>

                            <p class="tour-archive-text">
                                Just released: Australia & New Zealand 2020
                                From its boundless coastline, “most liveable” cities
                                and infinite red outback, Australia has every angle covered.
                                And then there’s New Zealand – a country where whale watching
                                and winery-hopping can be carried out in one unforgettable tour.
                                Dive beneath the surface of these destinations with Trafalgar and join us for a REAL
                                adventure,
                                unlike anything else.
                            </p>
                            <div class="tours-cols">
                            <div class="row">
        <?php

$args = array(
    'posts_per_page' => '2','post_type'=> 'tours',
);
                            $the_query = new WP_Query( $args );
                            
                            if ( $the_query->have_posts()) {
                                // The Loop
                                while ( $the_query->have_posts($the_query) ) { $the_query->the_post();
    
                                    ?>
        



                            
                                <!--reapeat-->
                                <div class="col-xs-12 col-md-6">
                                    <div class="tour-wrapper">
                                        <div class="tour-header" style="background:url('<?php echo  get_the_post_thumbnail_url() ?>')" >
                                            <div class="cover"></div>
                                            <h1 class="th1"> <?php echo the_title(); ?></h1>
                                        </div>
                                        <!--tour-header-->

                                            <div class="tour-footer d-inline-flex">
                                                <div class="row">
                                                    <div class="info col-3">
                                                        <h6> From </h6>
                                                        <p> <?php echo the_field('tour_from'); ?></p>
                                                    </div><!--info-->

                                                    <div class="info col-3">
                                                        <h6> Day </h6>
                                                        <p><?php echo the_field('tour_day'); ?></p>
                                                    </div><!--info-->

                                                    <div class="info col-3">
                                                            <h6> City </h6>
                                                            <p><?php echo the_field('tour_city'); ?></p>
                                                    </div><!--info-->

                                                    <div class="info view-btn col-3">
                                                        <a href="<?php the_permalink(); ?>" class="" > View Tour </a>
                                                    </div><!--info-->
                                            </div><!--footer-row-->
                                        </div>
                                        <!--tour-footer-->

                                    </div><!--tour-wrapper-->
                                </div><!--col-->
                                <!--repeat-->
                                <?php }
                            wp_reset_postdata();
                            
                            } ?>
                                <!--reapeat-->
                                

<!-- /****************************second-row**************************/ -->

<?php
$args2 = array(
    'posts_per_page' => '3', 'offset' =>2 ,'post_type'=> 'tours',
);
                            $the_query2 = new WP_Query( $args2 );
                            if ( $the_query2->have_posts()) {
                                // The Loop
                                while ( $the_query2->have_posts($the_query) ) { $the_query2->the_post();
    
                                    ?>
        

                            
                               <!--reapeat-->
<div class="col-xs-12 col-md-4">
        <div class="tour-wrapper">
            <div class="tour-header" style="background:url('<?php echo  get_the_post_thumbnail_url() ?>')" >
                <div class="cover"></div>
                <h1 class="th1"> <?php echo the_title(); ?> </h1>
            </div>
            <!--tour-header-->

            <div class="tour-footer d-inline-flex">
                <div class="row">
                <div class="info col-3">
                    <h6> From </h6>
                    <p><?php echo the_field('tour_from'); ?></p>
                </div><!--info-->

                <div class="info col-2">
                        <h6> Day </h6>
                        <p><?php echo the_field('tour_day'); ?></p>
                    </div><!--info-->

                    <div class="info col-3">
                            <h6> City </h6>
                            <p><?php echo the_field('tour_city'); ?></p>
                        </div><!--info-->

                        <div class="info view-btn col-4">
                        <a href="<?php the_permalink(); ?>" class="" > View Tour </a>
                            </div><!--info-->
                        </div><!--footer-row-->
            </div>
            <!--tour-footer-->

        </div><!--tour-wrapper-->
    </div><!--col-->
<!--repeat-->
                                <?php }
                            wp_reset_postdata();
                            
                            } ?>
                                <!--reapeat-->






                            </div>
                            <!--tours-cols--->
                        </div><!--row-->
            </div><!--container-->
        </div><!---tour-page-content-->

    </main>

    <!--/*********************footer***************************/-->
<?php get_footer(); ?>