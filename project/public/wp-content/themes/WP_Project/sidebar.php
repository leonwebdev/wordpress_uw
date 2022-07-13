<?php
$sidebar_posts = wp_project_sidebar_post_query();

while ($sidebar_posts->have_posts()) :
    $sidebar_posts->the_post();
?><div class="mb-5">
    <div class="p-3 home_card_h">
        <a href="<?php the_permalink(); ?>">
            <h5 class="home_card_h"><?php the_title() ?></h5>
        </a>
    </div>
    <div class="home_card_img_div">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
    </div>
</div>
<?php endwhile; ?>