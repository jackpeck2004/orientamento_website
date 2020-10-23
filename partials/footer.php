<footer class="page-footer">
    <div class="container row">
        <div class="one-half column">
            <?php
wp_nav_menu( array( 
    'theme_location' => 'footer-menu', 
    'container_class' => 'footer-menu-class' ) ); 
?>
            <span class="secondary copyright">
                <?php echo "&copy; ". date(Y)." Copyright H-FARM."; ?>
            </span>
        </div>
        <div class="one-half column">
            <div class="copyrights">
                <p>Theme designed by:</p>
                <ul>
                    <li><a class="secondary" href="https://giacomopasin.com">Giacomo Pasin</a></li>
                    <li><a class="secondary" href="">Tommaso Paganelli</a></li>
                </ul>
                <p class="secondary students">
                    Students @ H-FARM International School
                </p>
            </div>
        </div>
    </div>
</footer>