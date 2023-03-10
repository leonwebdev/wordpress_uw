<?php get_header(); ?>
<div class="container">
    <div class="sidebar">
        <?php get_sidebar(); ?>
    </div>
    <div class="main">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <article>

            <h1><?php the_title(); ?></h1>

            <span class="meta">Posted on <?php the_date(); ?> by <?php the_author(); ?></span>

            <?php the_content(); ?>

        </article>

        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>