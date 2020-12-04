<?php

function mojo_load_scripts_and_styles() {
    //WP loads everything from the project's root directory (wordpress)
    // but all the files have to be in the theme's root directory
    // me_home stands for "Mojo English"
    $me_home = "./wp-content/themes/mojo_english/";
    // Load JS and CSS files in here
    
    wp_register_style('font', "https://fonts.googleapis.com/css?family=Karla:400,700&display=swap");
    wp_register_style('fonts', $me_home . 'demos/store/css/fonts.css');
    wp_register_style('store', $me_home . 'demos/store/store.css');
    wp_register_style ('bootstrap',  $me_home . 'css/bootstrap.css');
    wp_register_style ('swiper', $me_home . 'css/swiper.css');
    wp_register_style ('font-icons', $me_home . 'css/font-icons.css');
    wp_register_style ('dark', $me_home . 'css/dark.css');
    wp_register_style ('popup', $me_home . 'css/magnific-popup.css');
    wp_register_style ('animate', $me_home . 'css/animate.css');
    wp_register_style ('custom', $me_home . 'css/custom.css');
    wp_register_style ('style', $me_home . 'style.css');


    wp_register_script ('placeholder', get_stylesheet_directory_uri() . '/js/placeholder.js', array( 'jquery' ),'1.0.0',true);
    wp_enqueue_script('store');
    wp_enqueue_script('font');
    wp_enqueue_script('fonts');
    wp_enqueue_script('placeholder');
    wp_enqueue_style( 'style');
    wp_enqueue_style( 'bootstrap');
    wp_enqueue_style( 'popup');
    wp_enqueue_style( 'dark');
    wp_enqueue_style( 'swiper');
    wp_enqueue_style( 'font-icons');
    wp_enqueue_style( 'animate');
    wp_enqueue_style( 'custom');


    }
    
    add_action( 'wp_enqueue_scripts', 'mojo_load_scripts_and_styles' );
?>