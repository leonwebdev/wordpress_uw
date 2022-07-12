<?php get_header(); ?>
<div class="container">
    <div class="main">
        <h1>Recent News</h1>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <?php
                echo do_shortcode('[smartslider3 slider="2"]');
                ?>

        <article>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <span class="meta">Posted on <?php the_date(); ?> by <?php the_author(); ?></span>

            <?php the_excerpt(); ?>

        </article>

        <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>