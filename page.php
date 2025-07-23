<?php get_header();

    ?><main>
        <div class="main">
            <h1 class="centered-text"><?php the_title(); ?></h1>
            <div class="section">
                <?php wp_reset_postdata();
                the_content(); ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>