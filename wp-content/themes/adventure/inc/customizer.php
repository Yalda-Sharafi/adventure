<?php

function aryan_customize_register( $wp_customize ) {
    $wp_customize->add_section(
        'contact-info',array(
            'title'=>'اطلاعات تماس',
            'description'=>'فوتر سایت',
            'periority'=>35
        )
        
    );

  

    $wp_customize->add_setting(
        'company_address',array('default'=>'','transport'=>'refresh')    
    );

    $wp_customize->add_control(
        'company_address',array('label'=>'آدرس شرکت','section'=>'contact-info','type'=>'text')
    );
        
    

	$wp_customize->add_setting(
    'phone1',array('default'=>'021000000','transport'=>'refresh')
    );

    $wp_customize->add_control(
    'phone1',array(
        'label'=>"شماره تماس",
        'section'=>"contact-info",
        'type'=>"text"
    )
    );


    $wp_customize->add_setting(
        'mobile',array('default'=>'021000000','transport'=>'refresh')
        );
    
        $wp_customize->add_control(
        'mobile',array(
            'label'=>"شماره تماس",
            'section'=>"contact-info",
            'type'=>"text"
        )
        );


        $wp_customize->add_setting(
            'email',array('default'=>'','transport'=>'refresh')
            );
        
            $wp_customize->add_control(
            'email',array(
                'label'=>"پست الکترونیک",
                'section'=>"contact-info",
                'type'=>"text"
            )
            );




            $wp_customize->add_setting(
                'site',array('default'=>'','transport'=>'refresh')
                );
            
                $wp_customize->add_control(
                'site',array(
                    'label'=>"سایت",
                    'section'=>"contact-info",
                    'type'=>"text"
                )
                );





    $wp_customize->add_setting(
        'fax',array('default'=>'','transport'=>'refresh')
    );

    $wp_customize->add_control(
        'fax',array(
            'label'=>"فکس",
            'section'=>"contact-info",
            'type'=>"text"
        )

    );




$wp_customize->add_section(
    'social_media',array(
        'title'=>'شبکه های اجتماعی',
        'description'=>'آدرس شبکه های اجتماعی ',
        'periority'=>'34'

    )

);
    
$wp_customize->add_setting(
    'whats-app',array(
        'default'=>'','transport'=>'refresh'
    )
    );

    $wp_customize->add_control(
        'whats-app',array(
            'label'=>"واتس اپ",
            'section'=>"social_media",
            'type'=>'text'

        )
        );


        $wp_customize->add_setting(
            'instagram',array(
                'default'=>'','transport'=>'refresh'
            )
            );
        
            $wp_customize->add_control(
                'instagram',array(
                    'label'=>"اینستاگرام",
                    'section'=>"social_media",
                    'type'=>'text'
        
                )
                );


                $wp_customize->add_setting(
                    'facebook',array(
                        'default'=>'','transport'=>'refresh'
                    )
                    );
                
                    $wp_customize->add_control(
                        'facebook',array(
                            'label'=>"فیسبوک",
                            'section'=>"social_media",
                            'type'=>'text'
                
                        )
                        );


                        $wp_customize->add_setting(
                            'youtube',array(
                                'default'=>'','transport'=>'refresh'
                            )
                            );
                        
                            $wp_customize->add_control(
                                'youtube',array(
                                    'label'=>"یوتیوب",
                                    'section'=>"social_media",
                                    'type'=>'text'
                        
                                )
                                );

                                $wp_customize->add_setting(
                                    'tripadvisor',array(
                                        'default'=>'','transport'=>'refresh'
                                    )
                                    );
                                
                                    $wp_customize->add_control(
                                        'tripadvisor',array(
                                            'label'=>"tripadvisor",
                                            'section'=>"social_media",
                                            'type'=>'text'
                                
                                        )
                                        );

                                        $wp_customize->add_setting(
                                            'inquire',array(
                                                'default'=>'','transport'=>'refresh'
                                            )
                                            );
                                        
                                            $wp_customize->add_control(
                                                'inquire',array(
                                                    'label'=>"inquire",
                                                    'section'=>"social_media",
                                                    'type'=>'text'
                                        
                                                )
                                                );




	
			
			
}

 
add_action( 'customize_register', 'aryan_customize_register' );