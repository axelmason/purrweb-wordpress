<?php

add_action('wp_enqueue_scripts', 'enqueue_scripts');

function enqueue_scripts()
{
    wp_enqueue_style('main-css', get_template_directory_uri().'/style.css', array(), '1.0');
    wp_enqueue_script('jquery', get_template_directory_uri().'/media/js/jquery-3.6.0.js', array('jquery'));
    wp_enqueue_script('jcarousel-js', 'https://sorgalla.com/jcarousel/dist/jquery.jcarousel.min.js', array('jquery'));
    wp_enqueue_script('main-js', get_template_directory_uri().'/media/js/main.js', array('jquery'), '1.0');
}

add_theme_support('post-thumbnails');

add_action('init', 'register_cpt_products');

// Функция register_cpt_products
function register_cpt_products() {

    $labels = array(
        'name' => _x('Товары', 'products')
    );

    $args = array(
        'labels' => $labels,
        'supports' => array('title', 'editor','thumbnail'),
        'taxonomies' => array('products'),
        'menu_icon' => 'dashicons-buddicons-activity',
        'public' => true
    );

    register_post_type('products', $args);
    
    flush_rewrite_rules();
}