<?php

function ser_widgets(){
    register_sidebar([
        'name'          => __( 'Sidebar Posts', 'ser' ),
        'id'            => 'ser_sidebar_blog',    
        'description'   => __('Sidebar for display content for post y categories', 'ser'),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s  mb-3 border-bottom">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="font-italic">',
        'after_title'   => '</h4>' 
    ]);

    register_sidebar([
        'name'          => __( 'Footer 1', 'ser' ),
        'id'            => 'ser_footer_1',    
        'description'   => __('footer 1: aqui se colocaria la descripción del sitio', 'ser'),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s  ">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>' 
    ]);

    register_sidebar([
        'name'          => __( 'Footer 2', 'ser' ),
        'id'            => 'ser_footer_2',    
        'description'   => __('footer 2', 'ser'),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s ">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>' 
    ]);

    register_sidebar([
        'name'          => __( 'Footer 3', 'ser' ),
        'id'            => 'ser_footer_3',    
        'description'   => __('footer 3', 'ser'),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s  ">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>' 
    ]);

    register_sidebar([
        'name'          => __( 'Footer 4', 'ser' ),
        'id'            => 'ser_footer_4',    
        'description'   => __('footer 4', 'ser'),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s  ">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>' 
    ]);

}