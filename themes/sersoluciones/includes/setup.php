<?php


function ser_setup_theme(){
    
    register_nav_menu( 'primary', __( 'Primary Menu', 'ser' ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'title-tag' );
}