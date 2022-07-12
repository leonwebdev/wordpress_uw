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

<section id="call_to_action" class="container mt-3">
    <div class="row">
        <?php
        $home_cta_posts = wp_project_cta_post_query();

        while ($home_cta_posts->have_posts()) :
            $home_cta_posts->the_post();
        ?><div class="col-md mb-5 mb-lg-3">
            <div class="p-3 home_card_h">
                <a href="<?php the_permalink(); ?>">
                    <h5 class="home_card_h"><?php the_title() ?></h5>
                </a>
            </div>
            <div class="home_card_img_div">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
            </div>
            <div class="py-3">
                <?php the_excerpt() ?>
            </div>
            <div class="d-flex justify-content-end">
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &gt;&gt;&gt;</a>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>
<?php get_footer(); ?>