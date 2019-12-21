<?php 

function ser_social_customizer_section( $wp_customize ){

    $wp_customize->add_setting( 'ser_facebook_handle', [
        'default' => ''
    ]);

    $wp_customize->add_setting( 'ser_twitter_handle', [
        'default' => ''
    ]);

    $wp_customize->add_setting( 'ser_instagram_handle', [
        'default' => ''
    ]);


    $wp_customize->add_section( 'ser_social_section', [
        'title'     =>  __( 'Ser Social Settings', 'ser' ),
        'priority'  =>  30,
        'panel'     =>  'Ser'
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ser_social_facebook_input',
            array(
                'label'          => __( 'Editar URL de Facebook', 'ser' ),
                'section'        => 'ser_social_section',
                'settings'       => 'ser_facebook_handle' 
                )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ser_social_twitter_input',
            array(
                'label'          => __( 'Editar URL de twitter', 'ser' ),
                'section'        => 'ser_social_section',
                'settings'       => 'ser_twitter_handle' 
                )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ser_social_instagram_input',
            array(
                'label'          => __( 'Editar URL de instagram', 'ser' ),
                'section'        => 'ser_social_section',
                'settings'       => 'ser_instagram_handle' 
                )
        )
    );
}