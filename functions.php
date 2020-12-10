<?php
// Custom Styles
function orientamento_custom_styles() {
    wp_enqueue_style( 'skeleton-cdn-css', 'https://cdn.jsdelivr.net/npm/skeleton-css@2.0.4/css/skeleton.min.css' );
    wp_enqueue_style( 'footer-css', get_template_directory_uri() . '/assets/css/footer.css' );
    wp_enqueue_style( 'menu-css', get_template_directory_uri() . '/assets/css/menu.css' );
    wp_enqueue_style( 'archive-css', get_template_directory_uri() . '/assets/css/archive.css' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
}     

add_action('wp_enqueue_scripts', 'orientamento_custom_styles');


// Menus
function orientamento_custom_menu() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'orientamento_custom_menu' );
?>
