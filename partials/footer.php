<footer class="page-footer">
    <div class="container">
        <div class="left">
            <?php
wp_nav_menu( array( 
    'theme_location' => 'footer-menu', 
    'container_class' => 'footer-menu-class' ) ); 
?>
            <span class="secondary copyright">
                <?php echo "&copy; ". date(Y)." Copyright H-FARM."; ?>
            </span>
        </div>
        <div class="right">
        </div>
    </div>
</footer>