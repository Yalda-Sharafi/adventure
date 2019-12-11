        <!-- /*blog*/ -->
        <div class="blog p-100">
            <div class="container">
                <h1 class="th1 text-center"><?php echo the_field('blog_header'); ?></h1>
                <h2 class="th2 text-center"><?php echo the_field('blog_sub_header'); ?></h2>
                <div class="articles">
                    <div class="row">
                    <?php
$posts=get_field('blog');
if($posts){
  foreach($posts as $post){
    setup_postdata($post);  

?>
                        <div class="col-xs-12 col-md-4">
                        <a href="<?php echo get_the_permalink();?>" title="article-link" >
                            <div class="article">
                                <?php echo get_the_post_thumbnail(); ?>
                                <div class="article-info">
                                    <h3 class="th2 pl-3"><?php the_title(); ?></h1>
                                    <p class="th4 pl-3">
                                        
                                    <?php echo wp_trim_words( get_the_content(), 15, '...' ); ?>
  </p>
                                </div>
                                <!--article-info-->
                            </div>
                            <!--article-->
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
        <!--blog-->

        </div>
        </div>