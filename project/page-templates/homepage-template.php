<?php
    /**
     * Template Name: Custom Homepage
     * Template Post Type: page
     */
    get_header();
?>
<main>
    <section class="coffee" style="background-image: url('<?php echo wp_kses_post(get_field('coffee_image')); ?>')">
        <div>
            <h1><?php echo wp_kses_post(get_field('coffee_title')); ?></h1>
        </div>
    </section>

    <section class="home-intro row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h2><?php echo wp_kses_post(get_field('coffee_one_title')); ?></h2>
            <p><?php echo wp_kses_post(get_field('coffee_one_text')); ?></p>
        </div>

        <div>
            <img src="<?php echo wp_kses_post(the_field('coffee_one_image'));  ?>">
        </div>
    </section>

    <section class="home-intro row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h2><?php echo wp_kses_post(get_field('coffee_two_title')); ?></h2>
            <p><?php echo wp_kses_post(get_field('coffee_two_text')); ?></p>
        </div>
        <div>
            <img src="<?php echo wp_kses_post(the_field('coffee_two_image'));?>"
            alt ="<?php echo wp_kses_post(the_field('coffee_two_image_alt')); ?>">
        </div>   
    
    </section>
    
    
    
</main>

<?php 
get_footer();
?>