<?php
                            $the_query = new WP_Query();

                        if ( have_posts() ) {
                            // The Loop
                            while ( have_posts() ) { the_post();

                                ?>

                                <!--/*REPEAT*/-->
                                <div class="col-12">
                                    <div class="news-box">

                                        <h2 class="th2 text-light"><i class="fas fa-file-alt"></i> <?php echo get_the_title(); ?> </h2>
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
                                                    <a class="btn-theme" href="<?php echo get_post_permalink() ?>"> Read more </a>
                                                </div>
                                            </div><!--col-md-7-->




                                        <div class="col-xs-12 col-md-12">
                                            <?php get_template_part('partial/postoption') ?>
                                        </div>




                                        </div><!--single-news-content-->
                                    </div><!--news-box-->
                                </div><!--col-md-6-->
                                <!--/*REPEAT*/-->


                                <?php

                            }//end while


                            wp_reset_postdata();                         
                            
                        } //end if
                        ?>