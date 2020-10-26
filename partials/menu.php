<div class="menu-wrapper">
    <nav class="page-menu">
        <div class="container navbar">
            <a class="title">
                <?php echo get_bloginfo('name'); ?>
            </a>
            <div class="links">
                <?php
    wp_nav_menu( array( 
        'theme_location' => 'header-menu', 
        'container_class' => 'header-menu-class' ) ); 
    ?>
            </div>
        </div>
    </nav>
</div>