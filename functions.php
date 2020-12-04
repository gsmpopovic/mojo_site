<?php
function mojo_load_scripts_and_styles() {
    // Load JS and CSS files in here
    wp_register_script ('placeholder', get_stylesheet_directory_uri() . '/js/placeholder.js', array( 'jquery' ),'1.0.0',true);
    wp_register_style ('style', get_stylesheet_directory_uri(), array(),'1.0.0','all');
  
    wp_enqueue_script('placeholder');
    wp_enqueue_style( 'style');
    }
    
    add_action( 'wp_enqueue_scripts', 'mojo_load_scripts_and_styles' );
?>