 <!-- /*section1-our tour*/ -->
 <div class="our-tour p-100">
            <div class="container">
                <h1 class="th1 text-center"><?php echo the_field('tours_header'); ?></h1>
                <h2 class="th2 text-center"><?php echo the_field('tours_sub_header'); ?></h2>


                <div class="tours pt-5">
                    <div class="row">



                    <?php
$posts=get_field('tours');
if($posts){
  foreach($posts as $post){
    setup_postdata($post);  

?>








                        <!-- /*repeat*/ -->
                        <div class="col-xs-1 col-sm-6 col-md-4">
                        <a href="<?php echo get_post_permalink() ?>" title="adventure tour" >
                            <div class="tour" style="background:url('<?php echo get_the_post_thumbnail_url() ?>')">
                                <div class="tour-info">
                                    <h1 class="th3 mb-3">SKI</h1>
                                    <h2 class="th4">Experience Iran with us</h2>
                                </div>
                                <!--tour-info-->
                            </div>
                            <!--tour-->
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
                <!--tours-->

            </div>
            <!--container-->
        </div>
        <!--our-tours-->