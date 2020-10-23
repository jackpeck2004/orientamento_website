<?php
// Custom Styles
function orientamento_custom_styles() {
    wp_enqueue_style( 'skeleton-cdn-css', 'https://cdn.jsdelivr.net/npm/skeleton-css@2.0.4/css/skeleton.min.css' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
}     

add_action('wp_enqueue_scripts', 'orientamento_custom_styles');
?>