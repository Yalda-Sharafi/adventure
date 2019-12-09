<!-- /*slider*/ -->
<div class="slider">

<?php
                if(have_rows('front-slider'));
                    while(have_rows('front-slider')):
                        the_row();
                        $slide_image=get_sub_field('slide-pic');
                        // $slide_title=get_sub_field('slide-title');
                        // $slide_content=get_sub_field('slide-content');
                        // $slide_arm=get_sub_field('slide-arm');
                        
                ?>

                            <div class="adventure-slide">

                                        <img src="<?php echo $slide_image['url']; ?>">
                                        <div class="slider-over-flow">
                                            <h1 class="title th1 text-center">
                                            <?php echo get_sub_field('slide-header'); ?>
                                            </h1>

                                            <h2 class="sub-title th2 text-center">
                                            <?php echo get_sub_field('slide-sub-header'); ?>
                                            </h2>

                                            
                                            <a href="<?php echo get_sub_field('slide-button-link'); ?>" class="slider-btn btn-theme">
                                                Explore now
                                            </a>
                                        </div><!--slider-over-flow-->
                                
                         </div><!--adventure-slide-->
                                        <?php 

                                endwhile;
                         
                                wp_reset_postdata();
                                ?>
        </div><!--slider-->