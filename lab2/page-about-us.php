<?php get_header(); ?>
<div class="container">
    <div class="sidebar">
        <?php get_sidebar(); ?>
    </div>
    <div class="main">

        <h1>About Us</h1>

        <section class="flex-container" style="flex-flow: nowrap;margin: 2.5em 0;">
            <div style="width: 550px; padding-right: 2rem;">
                <h1 style="margin-top: 0;">Welcome to my Blog!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At possimus molestiae maiores recusandae
                    eos
                    hic,
                    temporibus tenetur, fugit laboriosam, nemo soluta consequuntur similique quidem sunt minima
                    delectus.
                    Exercitationem, ipsa libero.</p>
            </div>
            <div>
                <img src="<?= get_template_directory_uri() ?>/images/feature_pic.svg" style="width:30rem;height:auto;">
            </div>

        </section>


    </div>
</div>
<?php get_footer(); ?>