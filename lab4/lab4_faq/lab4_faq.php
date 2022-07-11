<?php

/*
Plugin Name: Lab4 FAQ
Author: Lihang Yao
Description: Add a FAQ function
Version: 1.0
*/

if (!function_exists('lab4_add_css_n_js')) {
    function lab4_add_css_n_js(){
        $css = plugin_dir_url(__FILE__) . 'style/style.css';
        $js = plugin_dir_url(__FILE__) . 'js/app.js';

        wp_enqueue_style('lab4_faq',$css);
        wp_enqueue_script('lab4_faq',$js,['jquery']);
    }
    add_action('wp_enqueue_scripts','lab4_add_css_n_js');
}