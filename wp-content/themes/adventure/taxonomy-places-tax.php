  <?php get_header() ?>
  <!-- /*place to go*/ -->
  <div class="places-go p-100">
            <div class="container">
                <h1 class="th1 text-center text-light">Places to go</h1>
                <h2 class="th2 text-center text-light">Experience Iran with us</h2>
                <div class="places pt-3">
                    <div class="row">
                    <?php
$posts=get_field('places','5');
if($posts){
  foreach($posts as $post){
    setup_postdata($post);  

?>
                        <div class="col-xs-12 col-md-4">
                        <a href="<?php echo get_the_permalink();?>" title="" >
                            <div class="place-go">
                            <?php echo get_the_post_thumbnail(); ?>
                                <div class="place-info">
                                    <h1 class="th1 pl-3 text-dark"><?php echo get_the_title(); ?></h1>
                                    <h2 class="th2 pl-3 text-dark">Experience Iran with us</h2>
                                </div>
                                <!--place-info-->
                            </div>
                            <!--place-go-->
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
                <!--places-->

            </div>
            <!--container-->
        </div>
        <!--places-->
        </div>
        <!--container-->
        </div>
        <!--places-go-->

        <?php get_footer(); ?>