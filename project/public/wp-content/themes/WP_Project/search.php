<?php get_header(); ?>

<section id="page_header" class="container my-3">
    <img src="<?= get_template_directory_uri() ?>/images/page_header.jpg" alt="page_header" class="w_100_img" />
</section>

<section id="main_content" class="container">
    <div class="row">
        <div class="col-md-8 page_content">
            <h1>Search: <?= get_search_query(); ?></h1>

            <h3>Your search returned <?= esc_html(count($posts)); ?> results</h3>

            <?php if (count($posts)) : ?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
            <?php the_post(); ?>

            <article class="post_list_article mt-3 mb-5">

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <p class="text-secondary">Posted on <?php the_date(); ?></p>

                <?php the_excerpt(); ?>

            </article>

            <?php endwhile; ?>
            <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="col-md-4 sidebar">
            <?php get_sidebar('archive'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>