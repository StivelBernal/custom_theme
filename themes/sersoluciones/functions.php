<?php

/**
 * Setup.
 */
define( 'SER_DEV_MODE', true);

/**
 * Includes
*/

include( get_theme_file_path( 'includes/front/enqueue.php' ) );
include( get_theme_file_path( 'includes/front/nav_bootstrap.php' ) );
include( get_theme_file_path( 'includes/setup.php' ) );
include( get_theme_file_path( 'includes/front/widgets.php' ) );
include( get_theme_file_path( 'includes/front/theme_customizer.php' ) );
include( get_theme_file_path( 'includes/customizer/social.php' ) );
include( get_theme_file_path( 'includes/customizer/misc.php' ) );

/**
 * Hooks
 */

add_action( 'wp_enqueue_scripts', 'ser_enqueue' );
add_action( 'after_setup_theme', 'ser_setup_theme' );
add_action( 'widgets_init', 'ser_widgets' );
add_action( 'customize_register', 'ser_customize_register' );



/**
* Shorcodes
*/



