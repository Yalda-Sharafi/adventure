<?php
                        if ( have_posts() ) {
                            // The Loop
                            while ( have_posts() ) { the_post(); ?>

                                <!--/*REPEAT*/-->
                                <div class="col-12">
                                    <div class="news-box">
                                        <h2><i class="fas fa-file-alt"></i> <?php echo get_the_title(); ?> </h2>
                                        
                                        <div class="single-news-content">
                                            <div class="row">
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
                                                    <button class="button"><a href="<?php echo get_post_permalink() ?>">مشاهده جزئیات</a></button>
                                                </div><!--left-single-news-content-->
                                            </div><!--col-md-7-->
                                            <!--*****************post-info***************-->
                                            <div class="col-xs-12 col-md-12">
                                            <div class="post-option-archive" id="news-front-date">
                                              <date> <i class="far fa-calendar-alt"></i> <?php echo get_the_date( 'Y-m-d' );  ?> </date>
                                              <span class="post-code">   <i class="fas fa-file-alt" aria-hidden="true"></i>  کد خبر: <?php echo get_the_ID(); ?> </span>
                                              <span class="post-view">   <i class="far fa-eye"></i></i>  بازدید: <?php  echo getPostViews(get_the_ID()); ?></span>
                                              <span class="post-like">  <a href="#" class="link-like" data-pid="<?php echo get_the_ID(); ?>" <?php echo isset($_COOKIE['post-'.get_the_ID()]) && intval($_COOKIE['post-'.get_the_ID()])? 'data-liked="1"' : 'data-liked="0"'  ?>> <i class="far fa-thumbs-up"> <?php echo get_post_likes(get_the_ID()) ?> </i>  </a>  </span> 
                                              
                                            </div><!--post-option-archive-->
                                            </div><!--col-xs-12 col-md-12-->

                                            </div><!---row-content-->
                                        </div><!--single-news-content-->
                                    </div><!--news-box-->
                                </div><!--col-->
                                <!--/*REPEAT*/-->


                                <?php }; 
                            
                            wp_reset_postdata();
                            
                        

                        }
                        
 ?>
                        