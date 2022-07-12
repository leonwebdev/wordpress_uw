<?php

/**
 * Template Name: Home Page
 */

get_header(); ?>
<section id="header_slogen" class="container-fluid d-flex align-content-center justify-content-center my-3">
    <h1>Bring Space Debris Home!</h1>
</section>
<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
<?php get_footer(); ?>