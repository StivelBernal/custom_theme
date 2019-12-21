<?php

function ser_customize_register( $wp_customize ){
    $wp_customize->add_panel( 'Ser', [
        'title'         =>  __('Ser', 'ser'),
        'description'   =>  '<p>Ser theme settings</p>',
        'priority'      =>  150
    ]);

    ser_social_customizer_section( $wp_customize );
    ser_misc_customizer_section( $wp_customize );

}