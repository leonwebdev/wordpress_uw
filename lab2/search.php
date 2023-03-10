<?php get_header(); ?>
<div class="container">
    <div class="sidebar">
        <?php get_sidebar('posts'); ?>
    </div>
    <div class="main">

        <h1>Search: <?= get_search_query(); ?></h1>

        <h2>Your search returned <?= esc_html(count($posts)); ?> results</h2>

        <?php if (count($posts)) : ?>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <article>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <span class="meta">Posted on <?php the_date(); ?> by <?php the_author(); ?></span>

            <?php the_excerpt(); ?>

        </article>

        <?php endwhile; ?>
        <?php endif; ?>

        <?php else : ?>

        <h2>Sorry, could not find what you were looking for</h2>

        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>