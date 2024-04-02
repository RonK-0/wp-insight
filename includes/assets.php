<?php 
function cvd_assets(){
    wp_enqueue_style('cvd-style', get_template_directory_uri() . '/css/main.css', microtime());
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'cvd_assets');


