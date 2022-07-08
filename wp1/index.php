<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>wp1</title>
    <link rel="stylesheet" href="<?= get_stylesheet_uri() ?>" />
</head>

<body>
    <header>
        <nav>
            <div class="navbar">
                <?php wp_nav_menu(); ?>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="sidebar pd-1">
            <h3>Categories</h3>
            <?php wp_list_categories(['title_li' => '']); ?>
            <h3>Archive</h3>
            <?php wp_get_archives(['title_li' => '']); ?>
        </div>
        <div class="main pd-1">
            <?php if (is_archive()) : ?>
            <h1><?= get_the_archive_title() ?></h1>
            <hr>
            <?php endif; ?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
            <div class="one_post">
                <?php the_post(); ?>
                <?php if (is_singular()) : ?>
                <h1><?php the_title(); ?></h1>
                <?php else : ?>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <?php endif; ?>
                <p class="one_post_cat">Post in <?= the_category(' ') ?> on <?= the_date() ?></p>
                <?php if (is_singular()) : ?>
                <?php the_content(); ?>
                <?php else : ?>
                <?php the_excerpt(); ?>
                <div class="read_more">
                    <a href="<?php the_permalink(); ?>">Read more...</a>
                </div>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <footer>
        <div class="footer">
            &copy; 2022 Leon WDD10 UW PACE
        </div>
    </footer>
</body>

</html>