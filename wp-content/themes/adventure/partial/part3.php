        <!-- /*Testimonial*/ -->
        <div class="Testimonial p-100">
            <div class="container">
                <h1 class="th1 text-center"> Testimonial </h1>
                <h2 class="th2 text-center">Who we are</h2>
                <div class="comments">
                    <div class="row">


<?php

$args = array(

    'number'  => '6',

);
$comments = get_comments( $args );
foreach ( $comments as $comment ) :


$user= $comment->user_id;

?>

                        <div class="col-xs-12 col-md-6">
                            <!-- /*comment-link*/ -->
                        <a href="<?php echo get_post_permalink() ?>" title="comment-link" >
                            <div class="comment">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="avatar-wrapper">
                                        <?php echo get_avatar($user); ?>
                                            <img src="<?php echo get_template_directory_uri() ?>/img/comment-icon.png" alt="comment-icon" class="comment-icon" />
                                        </div>
                                        <!--avatar-->
                                    </div>
                                    <!--col2-->
                                    <div class="col-8">
                                        <div class="comment-text">
                                            <h1 class="user-name th1"> <?php echo $comment->comment_author ?> </h1>
                                            <p>
                                                <?php echo $comment->comment_content; ?>
                                            </p>
                                            <a href="#" alt="">Read full review</a>

                                        </div>
                                        <!--comment-text-->

                                    </div>
                                    <!--col-10-->
                                </div>
                                <!--comment-content-row-->
                            </div>
                            <!--comment-->
</a>
                        </div>
                        <!--col-->
                  

                   <?php endforeach; ?>
                    </div>
                    <!--row-->

                </div>
                <!--comments-->

            </div>
            <!--row-->
        </div>
        <!--container-->

        </div>
        <!--Testimonial-->