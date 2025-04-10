<?php get_header(); ?>

<main>
    <?php
    while (have_posts()) : the_post();
        the_content();
    endwhile;
    ?>
    <p>this is my page</p>
</main>
<?php get_footer(); ?>
