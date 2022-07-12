<?php

/*
Plugin Name: WP Project
Author: Lihang Yao
Description: Add items for sale
Version: 1.0
*/

if (!function_exists('wp_project_sale_load_scripts')) {
    function wp_project_sale_load_scripts()
    {
        $style  = plugin_dir_url(__FILE__) . 'style.css';

        wp_enqueue_style('wp_project_sale_load_style', $style);
    }
    add_action('wp_enqueue_scripts', 'wp_project_sale_load_scripts');
}

if (!function_exists('wp_project_sale_shortcode')) {
    function wp_project_sale_shortcode($atts, $content)
    {
        $link = $atts['link'];
        $img = $atts['img'];
        $price = $atts['price'];
        $title = $content;
        $out = <<<EOT

        <div class="card px-0" style="width: 15rem;">
            <img src="{$img}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{$title}</h5>
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto"><h6>\${$price}</h6></div>
                    <div class="col-auto"><a href="{$link}" class="btn btn-danger">Add to Cart</a></div>
                </div>
            </div>
        </div>

        EOT;

        return $out;
    }
    add_shortcode('wpsale', 'wp_project_sale_shortcode');
}

if (!function_exists('wp_project_add_flex_container_head')) {
    function wp_project_add_flex_container_head()
    {
        $out = <<<EOT
        <div class="container row flex-wrap justify-content-evenly g-4 my-4 mx-0">
        EOT;

        return $out;
    }
    add_shortcode('wpsalehead', 'wp_project_add_flex_container_head');
}

if (!function_exists('wp_project_add_flex_container_close')) {
    function wp_project_add_flex_container_close()
    {
        $out = <<<EOT
        </div>
        EOT;

        return $out;
    }
    add_shortcode('wpsaleclose', 'wp_project_add_flex_container_close');
}

