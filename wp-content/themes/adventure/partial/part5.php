        <!-- /*why adventure*/ -->
        <div class="w-adventure p-100">
            <div class="container">
                <h1 class="th1 text-center"><?php echo the_field('specialise_header'); ?></h1>
                <h2 class="th2 text-center"><?php echo the_field('specialise_sub_header'); ?></h2>
                <div class="adventures">
                    <div class="row">
                    
                    <?php
$posts=get_field('advantage');
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


    </main>