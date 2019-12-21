<?php 

function ser_misc_customizer_section( $wp_customize ){

    $wp_customize->add_setting( 'ser_company', [
        'default' => ''
    ]);

    $wp_customize->add_setting( 'ser_company_link', [
        'default' => 'https://sersoluciones.com'
    ]);


    /**colores */
    $wp_customize->add_setting( 'ser_color_primary', [
        'default' => ''
    ]);

    $wp_customize->add_setting( 'ser_color_secondary', [
        'default' => '#af67b2'
    ]);

    $wp_customize->add_setting( 'ser_color_secondary_hover', [
        'default' => '#633764'
    ]);

    $wp_customize->add_setting( 'ser_color_secondary_borde', [
        'default' => '#492149'
    ]);

    $wp_customize->add_setting( 'ser_color_secondary_rgb', [
        'default' => '219, 34, 194'
    ]);

    $wp_customize->add_setting( 'ser_color_azul_oscuro', [
        'default' => '#6c64c0'
    ]);

    $wp_customize->add_setting( 'ser_color_anaranjado', [
        'default' => '#ff8000'
    ]);

    $wp_customize->add_setting( 'ser_color_amarillo', [
        'default' => '#f8e117'
    ]);
    /**termina colores */

    $wp_customize->add_section( 'ser_misc_section', [
        'title'     =>  __( 'Misc', 'ser' ),
        'priority'  =>  30,
        'panel'     =>  'Ser'
    ]);

    $wp_customize->add_section( 'ser_color_section', [
        'title'     =>  __( 'Color', 'ser' ),
        'priority'  =>  30,
        'panel'     =>  'Ser'
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ser_company_link_input',
            array(
                'label'          => __( 'URL de la empresa', 'ser' ),
                'section'        => 'ser_misc_section',
                'settings'       => 'ser_company_link' 
                )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ser_company_input',
            array(
                'label'          => __( 'Nombre a mostrar de la empresa', 'ser' ),
                'section'        => 'ser_misc_section',
                'settings'       => 'ser_company' 
                )
        )
    );

    /**controls de color */

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ser_color_primary_input',
            array(
                'label'          => __( 'Color primario', 'ser' ),
                'section'        => 'ser_color_section',
                'settings'       => 'ser_color_primary' 
                )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ser_color_secondary_input',
            array(
                'label'          => __( 'Color secundario', 'ser' ),
                'section'        => 'ser_color_section',
                'settings'       => 'ser_color_secondary' 
                )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ser_color_sec_hover_input',
            array(
                'label'          => __( 'Color secundario hover', 'ser' ),
                'section'        => 'ser_color_section',
                'settings'       => 'ser_color_secondary_hover' 
                )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ser_color_sec_borde_input',
            array(
                'label'          => __( 'Color secundario borde', 'ser' ),
                'section'        => 'ser_color_section',
                'settings'       => 'ser_color_secondary_borde' 
                )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ser_color_sec_rgb_input',
            array(
                'label'          => __( 'Color secundario valor RGB sin parentesis', 'ser' ),
                'section'        => 'ser_color_section',
                'settings'       => 'ser_color_secondary_rgb' 
                )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ser_color_azul_input',
            array(
                'label'          => __( 'Color azul oscuro', 'ser' ),
                'section'        => 'ser_color_section',
                'settings'       => 'ser_color_azul_oscuro' 
                )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ser_color_anaranjado_input',
            array(
                'label'          => __( 'Color anaranjado', 'ser' ),
                'section'        => 'ser_color_section',
                'settings'       => 'ser_color_anaranjado' 
                )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ser_color_amarillo_input',
            array(
                'label'          => __( 'Color amarillo', 'ser' ),
                'section'        => 'ser_color_section',
                'settings'       => 'ser_color_amarillo' 
                )
        )
    );
   
}