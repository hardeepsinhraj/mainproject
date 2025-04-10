<?php 
/**
 * This is the default Homepage template file foe assignment.
 */
get_header(); ?>
    <?php 
        $featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    ?>
    <section class="post-coffee" style="background-image: url('<?php echo esc_url($featuredImg[0]); ?>')">
        <div >
            <h1><?php the_title(); ?></h1>
            
        </div>
        <section class="homepage-content">
            <?php echo get_the_content(); ?>
            </section>
         
    </section>
            
<?php get_footer(); ?>