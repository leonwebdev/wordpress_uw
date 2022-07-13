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
        wp_enqueue_script('app_js', get_template_directory_uri() . '/js/app.js',['jquery']);
    }

    add_action('wp_enqueue_scripts', 'wp_project_load_scripts');
}

if (!function_exists('wp_project_sidebar_post_query')) {
    function wp_project_sidebar_post_query()
    {
        $args = [
            'post_type' => 'page',
            'posts_per_page' => '3',
            'post__not_in' => [8],
            'orderby' => 'rand',
        ];
        $query = new WP_Query($args);
        return $query;
    }
}

if (!function_exists('wp_project_cta_post_query')) {
    function wp_project_cta_post_query()
    {
        $args = [
            'post_type' => 'page',
            'posts_per_page' => '3',
            'post__not_in' => [8, 14, 18],
            'orderby' => 'rand',
        ];
        $query = new WP_Query($args);
        return $query;
    }
}

if (!function_exists('wp_project_the_excerpt')) {
    function wp_project_the_excerpt($excerpt)
    {
        global $post;
        if (!empty($post->post_exerpt)) {
            $new_ex = $excerpt;
        } else {

            $sub_ex = substr($excerpt, 0, 200);
            $space = strrpos($sub_ex, ' ');
            $sub_ex = substr($sub_ex, 0, $space);
            $new_ex = $sub_ex . "...";
        }

        return $new_ex;
    }
    add_filter('the_excerpt', 'wp_project_the_excerpt');
}