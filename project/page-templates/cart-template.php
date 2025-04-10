<?php
/**
 * Template Name: cart Template
 * Template Post Type: page
 */
get_header(); 
?>
 <section clss="shortcode">
    <?php echo do_shortcode("[woocommerce_cart]");?>
    </section>
<?php
get_footer();
?>