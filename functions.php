<?php
//Theme functions go here//

//function myFunction() {

//}

//myFunction();

function enqueue_my_styles_and_scripts() {

  wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . 'wpthemestyles.css', array(), '1.0.0', 'all');




}

add_action('wp_enqueue_scripts', 'enqueue_my_styles_and_scripts');
