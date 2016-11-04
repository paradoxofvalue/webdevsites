<?php
define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');
 
// ENQUEUE STYLES
     
function enqueue_styles() {
     
    /** REGISTER css/screen.cs **/
    wp_register_style( 'bootstrap', THEME_DIR . '/css/bootstrap.min.css', array(), '1', 'all' );
    wp_register_style( 'font-awesone', THEME_DIR . '/css/font-awesome.min.css', array(), '1', 'all' );
    wp_register_style( 'animate', THEME_DIR . '/css/animate.min.css', array(), '1', 'all' );
    wp_register_style( 'lightbox', THEME_DIR . '/css/lightbox.css', array(), '1', 'all' );
    wp_register_style( 'main', THEME_DIR . '/css/main.css', array(), '1', 'all' );
    wp_register_style( 'responsive', THEME_DIR . '/css/responsive.css', array(), '1', 'all' );
    wp_register_style( 'style', THEME_DIR . '/css/style.css', array(), '1', 'all' );

    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'font-awesone' );
    wp_enqueue_style( 'animate' );
    wp_enqueue_style( 'lightbox' );
    wp_enqueue_style( 'main' );
    wp_enqueue_style( 'responsive' );
    wp_enqueue_style( 'style' );
         
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

// REG NAV
register_nav_menus( array(
	'main_menu' => 'Web Dev Navigation Menu'
) );