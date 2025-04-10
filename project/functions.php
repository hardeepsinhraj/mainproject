<?php 
//add function to setup theme
function customtheme_theme_setup(){
    register_nav_menus(array(
        'header' => 'Header menu',
        'footer' => 'Footer menu'
    ));
}
add_action('after_setup_theme', 'customtheme_theme_setup');
//add support for featured images
add_theme_support('post-thumbnails');

function custom_theme_styles() {
    wp_enqueue_style('custom-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_theme_styles');

?>
<?php
//adding wocommerce support
function custometheme_add_woocommerce_support() {
    add_theme_support('woocommerce');

}
add_action('after_setup_theme', 'custometheme_add_woocommerce_support');
 function enqueue_wc_cart_fragements() {
    wp_enueue_script('wc-cart-fragements');
 }
    add_action('wp_enueue_script', 'enqueue_wc_cart_fragments');
    ?>