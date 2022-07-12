<?php

register_nav_menus();
add_theme_support('post-thumbnails');

if (!function_exists('wp_project_load_styles')) {

    function wp_project_load_styles()
    {
        wp_enqueue_style('wp_project', get_stylesheet_uri(), ['bootstrap']);
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    }

    add_action('wp_enqueue_scripts', 'wp_project_load_styles');
}

if (!function_exists('wp_project_load_scripts')) {

    function wp_project_load_scripts()
    {
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js');
        wp_enqueue_script('app_js', get_template_directory_uri() . '/js/app.js');
    }

    add_action('wp_enqueue_scripts', 'wp_project_load_scripts');
}