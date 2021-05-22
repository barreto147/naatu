<?php

function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', 
  					array(), 
  					'4.1.3'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');


function dcms_load_dashicons_front_end() {
	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'dcms_load_dashicons_front_end' );


function naatu_files() {
    wp_enqueue_style('naatu_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'naatu_files');




?>