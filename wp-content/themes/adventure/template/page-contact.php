<?php
 /*
Template Name:contact
*/ 
get_header(); ?>

<!--/*****************************banner*************************/-->
<div class="banner-blog">
    <?php
if(has_post_thumbnail()){
    echo get_the_post_thumbnail(); 
    }else{
    echo '<img src="'.get_template_directory_uri().'/img/contact-banner.jpg" alt="" />';
    }
    ?>
</div>

    <!--/*****************************bradcrumb*************************/-->
    <?php get_template_part('partial/breadcrumb'); ?>

<div class="my_page my_page_contact">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>

    <!--/*****************************content-page*************************/-->
    <div class="contact-page">
        <div class="container">
        <h1 class="th1">
                     <?php the_title(); ?>
                    </h1>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="contact-form">
                    <?php echo do_shortcode('[gravityform id="1" title="true" description="true"]') ?>
                    </div>
                   
                </div>
                <!--col1-->

                <div class="col-xs-12 col-md-6">
                    <!-- /map/ -->
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d680.6246385729801!2d51.432210281874575!3d35.760275121098054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfa!2snl!4v1572437720536!5m2!1sfa!2snl"
                        width="100%"
                        height="350"
                        frameborder="0"
                        style="border:0;"
                        allowfullscreen="">
                        </iframe>

                    </div>
    <!--map-->

    <div class="company-contact">
                        
<div class="row">
    <div class="col-4">
                        <!-- <p>
                        <span class="dashicons dashicons-phone"></span>-->
                            <!-- <?php echo get_theme_mod('phone1'); ?> -->
                        <!-- </p>
                        <p> -->
                        <!-- <span class="dashicons dashicons-phone"></span> -->
                            <!-- <?php echo get_theme_mod('fax'); ?> -->
                        <!-- </p>  -->


                        <p>
                        <span class="dashicons dashicons-smartphone"></span>
                            <?php echo get_theme_mod('mobile'); ?>
                        </p>

</div> <!--col-4-->  
<div class="col-4">
                        <p>
                        <span class="dashicons dashicons-email"></span>
                            <?php echo get_theme_mod('email'); ?>
                        </p>
</div> <!--col-4-->
<div class="col-4">
                        <p>
                        <span class="dashicons dashicons-admin-site"></span>
                            <?php echo get_theme_mod('site'); ?>
                        </p>
                       
</div><!--col-4-->
<div class="col-12">
<p>

<span class="dashicons dashicons-admin-home"></span>
    <?php echo get_theme_mod('company_address'); ?>
</p>
</div>
</div> <!--row-->
                    </div>
                    <!--company-contact-->

                </div>
                <!--col2-->

                <div class="col-12">


    <div class="content">
        <div class="row">
        <div class="col-10">
        <?php the_content(); ?>
</div> <!--col10-->

<div class="col-2">
<a href="<?php echo get_theme_mod('inquire'); ?>" class="btn-theme contact-inquire"> inquire now </a>
 </div> 
<!--col-2-->
</div> <!--row-->

    </div>
    <!--content-->
    <div>
        <!--col3-content-->




            </div>
        </div>
        <!--row-->
   
   
   
   
   
    </div>
    <!--row-->



<?php endwhile; endif; ?>


    </div>

    

</div>
<!--my-page-->
<?php get_footer(); ?>