<?php

function ser_enqueue(){

    $uri = get_theme_file_uri();
    $vers =  SER_DEV_MODE ? time(): false;
    wp_enqueue_style( 'ser-css-custom', $uri.'/assets/app/css/custom.css', [], $vers);
    wp_enqueue_style( 'ser-bootstrap', $uri.'/assets/app/css/bootstrap.min.css', [], $vers);
    wp_enqueue_style( 'ser-styles-animations', $uri.'/assets/app/css/app.min.css', [], $vers);
    wp_enqueue_style( 'ser-styles-sections', $uri.'/assets/app/css/sections.css', [], $vers);
    wp_enqueue_style( 'ser-libraries', $uri.'/assets/app/css/libraries.min.css', [], $vers);
    wp_enqueue_style( 'ser-fonts', $uri.'/assets/app/css/fonts.min.css', [], $vers);
    wp_enqueue_style( 'ser-ui', $uri.'/assets/app/css/ser-ui.min.css', [], $vers);
    wp_enqueue_script( 'ser-scripts', $uri.'/assets/app/js/app.min.js', [], $vers, true);
    wp_enqueue_script( 'ser-custom-scripts', $uri.'/assets/app/js/custom.js', [], $vers, true);
}