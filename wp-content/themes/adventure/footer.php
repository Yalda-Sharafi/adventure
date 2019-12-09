 <!-- /*footer*/ -->
 <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-3">
                    <div class="col1">
                        <a href="<?php echo get_theme_mod('tripadvisor'); ?>" class="footer-btn"><img src="<?php echo get_template_directory_uri()?>/img/tripAdvisor.png" class="foot-btn"
                                alt="tripAdvisor-btn" /> </a>
                        <a href="<?php echo get_theme_mod('inquire'); ?>" class="footer-btn"><img src="<?php echo get_template_directory_uri()?>/img/inquire.png" class="foot-btn" alt="inquire-btn" />
                        </a>
                        <a href="<?php echo get_theme_mod('whats-app'); ?>" class="footer-btn"><img src="<?php echo get_template_directory_uri()?>/img/Whatsapp.png" class="foot-btn"
                                alt="Whatsapp-btn" /> </a>
                    </div>
                    <!--col1-->
                </div>
                <!--col-->

                <div class="col-xs-12 col-3">
                    <div class="col2">
                        <p class="contact">

               
                            Contact Us : <?php echo get_theme_mod('phone1'); ?>
                        </p>

                        <p>
                            <span class="dashicons dashicons-location"></span> <?php echo get_theme_mod('company_address'); ?>
                        </p>
                        <p>
                            <span class="dashicons dashicons-email-alt"></span> <?php echo get_theme_mod('email'); ?>
                        </p>

                        <p class="social-media">
                            <a href="<?php echo get_theme_mod('facebook'); ?>" title=""><span class="dashicons dashicons-facebook-alt"></span></a>
                            <a href="<?php echo get_theme_mod('instagram'); ?>" title=""><span class="iconify" data-icon="dashicons-instagram" data-inline="false"></span></a>
                            <a href="<?php echo get_theme_mod('youtube'); ?>" title=""><span class="dashicons dashicons-video-alt3"></span></a>
                        </p>
                    </div>
                    <!--col2-->

                </div>
                <!--col-->

                <div class="col-xs-12 col-3">
                    <div class="col3">

                    <?php  dynamic_sidebar('سایدبار ستون اول پابرگ'); ?>

                    </div>
                    <!--col3-->
                </div>
                <!--col-->

                <div class="col-xs-12 col-3">
                        <div class="col4">
                        <?php  dynamic_sidebar('سایدبار ستون دوم پابرگ'); ?>

                            </div>
                            <!--col4-->
                </div>
                <!--col-->

            </div>
            <!--row-->
        </div>
        <!--container-->
        <div class="copy-right">
            <div class="container">
            <div class="row">
                <div class="col-6">
                    <span>  Design & SEO: Webramz.com </span>
                </div>

                <div class="col-6">
                    <span>2019-2021 Adventure tours. All Rights Reserved </span>
                </div>
            </div><!--row-->
        </div>
        </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>