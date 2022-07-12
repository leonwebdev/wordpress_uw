<?php get_header(); ?>

<section id="page_header" class="container my-3">
    <img src="<?= get_template_directory_uri() ?>/images/page_header.jpg" alt="page_header" class="w_100_img" />
</section>

<section id="main_content" class="container">
    <div class="row">
        <div class="col-md-8 page_content">
            <h1><?php the_title(); ?></h1>
            <hr />
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <div class="page_feature_img">
                <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full');
                        } ?>
            </div>
            <article class="page_content mt-3 mb-5">
                <p class=""><?php the_content(); ?></p>
            </article>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-md-4 sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>