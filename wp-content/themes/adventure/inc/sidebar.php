<?php

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'سایدبار آرشیو',
		'id'            => 'widget-webramz-theme',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
    ) );
    
    register_sidebar( array(
		'name'          => 'سایدبار ستون اول پابرگ',
		'id'            => 'widget-webramz-col1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="f-col">',
		'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
		'name'          => 'سایدبار ستون دوم پابرگ',
		'id'            => 'widget-webramz-col2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="f-col">',
		'after_title'   => '</h2>',
    ) );
  
    register_sidebar( array(
		'name'          => 'سایدبار محصولات',
		'id'            => 'widget-webramz-product',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="f-col">',
		'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );