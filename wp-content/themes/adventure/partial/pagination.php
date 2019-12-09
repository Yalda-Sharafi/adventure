<?php                            
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
            'posts_per_page' => 3,
            'paged'          => $paged,
        );

        $the_query = new WP_Query( $args );
        
                            the_posts_pagination( array(
                                'mid_size'  => 2,
                                'prev_text' => __( 'نوشته های قبلی', 'textdomain' ),
                                'next_text' => __( 'نوشته های بعدی', 'textdomain' ),
                            )
                            );