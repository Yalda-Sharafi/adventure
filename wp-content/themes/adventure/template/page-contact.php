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
    <div class="breadcrumb-wrapper">
<div class="container">
        <?php the_breadcrumb(); ?>
</div><!--container-->
    </div>

<div class="my_page my_page_contact">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>

    <!--/*****************************content-page*************************/-->
    <div class="contact-page">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h1 class="th1">
                        اطلاعات تماس با آروند
                    </h1>
                    <div class="company-contact">
                        

                        <p>
                            <i class="fas fa-phone"></i>
                            <?php echo get_theme_mod('phone1'); ?>
                        </p>
                        <p>
                            <i class="fas fa-fax"></i>
                            <?php echo get_theme_mod('fax'); ?>
                        </p>
                        <p>
                            <i class="fas fa-mobile-alt"></i>
                            <?php echo get_theme_mod('mobile'); ?>
                        </p>

                        

                        <p>
                            <i class="far fa-envelope"></i>
                            <?php echo get_theme_mod('email'); ?>
                        </p>

                        <p>
                            <i class="fas fa-globe-americas"></i>
                            <?php echo get_theme_mod('site'); ?>
                        </p>
                        <p>

                            <i class="fas fa-home"></i>
                            <?php echo get_theme_mod('company_address'); ?>
                        </p>

                    </div>
                    <!--company-contact-->
                </div>
                <!--col1-->

                <div class="col-xs-12 col-md-6">
                    <h1 class="th1">
                        با ما در ارتباط باشید ...
                    </h1>
                    <div class="contact-form-wrapper">

                        <?php echo do_shortcode( '[contact-form-7 id="112" title="contact-form1"]' ) ?>
                    </div>
                    <!--contact-form-wrapper-->

                </div>
                <!--col2-->

                <div class="col-12">

    <div class="content">
        <?php the_content(); ?>
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

    <!-- /map/ -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d680.6246385729801!2d51.432210281874575!3d35.760275121098054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfa!2snl!4v1572437720536!5m2!1sfa!2snl"
            width="100%"
            height="350"
            frameborder="0"
            style="border:0;"
            allowfullscreen=""></iframe>

    </div>
    <!--map-->

</div>
<!--my-page-->
<?php get_footer(); ?>