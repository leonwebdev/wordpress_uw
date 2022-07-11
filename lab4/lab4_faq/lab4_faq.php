<?php

/*
Plugin Name: Lab4 FAQ
Author: Lihang Yao
Description: Add a FAQ function
Version: 1.0
*/

if (!function_exists('lab4_add_css_n_js')) {
    function lab4_add_css_n_js()
    {
        $css = plugin_dir_url(__FILE__) . 'style/style.css';
        $js = plugin_dir_url(__FILE__) . 'js/app.js';

        wp_enqueue_style('lab4_faq', $css);
        wp_enqueue_script('lab4_faq', $js, ['jquery']);
    }
    add_action('wp_enqueue_scripts', 'lab4_add_css_n_js');
}

if (!function_exists('lab4_add_shortcode')) {
    function lab4_add_shortcode($atts, $content)
    {
        $question = $atts['q'];
        $answer = $content;
        $out = <<<EOT

            <div class="faq_card">
                <p class="faq_q"><span>Q: </span>{$question}</p>
                <p class="faq_a"><span>A: </span>{$answer}</p>
            </div>
        EOT;

        return $out;
    }
    add_shortcode('lab4faq', 'lab4_add_shortcode');
}