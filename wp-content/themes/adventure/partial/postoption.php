<div class="post-option-archive" id="news-front-date">
                                              <date> <i class="far fa-calendar-alt"></i> <?php echo get_the_date( 'Y-m-d' );  ?> </date>
                                              
                                                <span class="post-code">   <i class="fas fa-file-alt" aria-hidden="true"></i>  post code: <?php echo get_the_ID(); ?> </span>

                                                <span class="post-view">   <i class="far fa-eye"></i>  views: <?php  echo getPostViews(get_the_ID()); ?></span>
                                             
                                            </div>
