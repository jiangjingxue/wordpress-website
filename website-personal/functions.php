<?php

function sway_load_css(){ 

    wp_enqueue_style('sway-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' , array(), '5.1.3' , 'all');
    wp_enqueue_style('sway-style', get_template_directory_uri() . '/style.css' , array(), wp_get_theme()->get( 'Version' ), 'all'); 

}
add_action( 'wp_enqueue_scripts', 'sway_load_css' ); 

function sway_load_js(){

    //wp_enqueue_script('jquery');
    //wp_enqueue_script('sway-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js' , 'jquery', '5.1.3', true);

}
// add_action( 'wp_enqueue_scripts', 'sway_load_js' ); 
?>