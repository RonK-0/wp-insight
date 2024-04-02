<?php

function cvd_custom_project_post(){
    $projectPost_label = array(
        'name'          => __('Project Post','textdomain'),
        'singular_name' => __('Project Post','textdomain'),
        'add_new'       => __('Add Project Post', 'textdomain'),
        'add_new_item'  => __('Add new Project Post', 'textdomain'),
        'edit_item'     => __('Edit Project Post', 'textdomain'),
        'all_items'     => __('Project Post', 'textdomain'),
    );

    $projectPost_args = array(
        'labels'            => $projectPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'excerpt'),
    );

    register_post_type('projectPost', $projectPost_args);
}

add_action('init', 'cvd_custom_project_post');

function cvd_custom_services_post(){
    $servicePost_label = array(
        'name'          => __('Service Post','textdomain'),
        'singular_name' => __('Service Post','textdomain'),
        'add_new'       => __('Add Service Post', 'textdomain'),
        'add_new_item'  => __('Add new Service Post', 'textdomain'),
        'edit_item'     => __('Edit Service Post', 'textdomain'),
        'all_items'     => __('Service Post', 'textdomain'),
    );

    $servicePost_args = array(
        'labels'            => $servicePost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'excerpt'),
    );

    register_post_type('servicePost', $servicePost_args);
}

add_action('init', 'cvd_custom_services_post');
?>