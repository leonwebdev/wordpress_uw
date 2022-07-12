<?php get_header(); ?>

<section id="page_header" class="container my-3">
    <img src="<?= get_template_directory_uri() ?>/images/page_header.jpg" alt="page_header" class="w_100_img" />
</section>

<section id="main_content" class="container">
    <div class="row">
        <div class="col-md-8 page_content">
            <div style="min-height: 500px;">

                <h1>404 - Not Found</h1>
                <h4>No such results found.</h4>
                <p>Please try another search.</p>
            </div>
        </div>
        <div class="col-md-4 sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>