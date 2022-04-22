<?php 
function montheme_enqueue_styles() { 
    wp_enqueue_style("maincss", get_template_directory_uri() . '/style.css' ); 
} 

add_action('wp_enqueue_scripts', 'montheme_enqueue_styles' ); 
 
?>