{{-- <footer class="content-info">
    <div class="container">
        @php dynamic_sidebar('sidebar-footer') @endphp
    </div>
</footer> --}}

<footer class="page-footer">
    <div class="container row">
        <div class="one-half column">
            @php
            wp_nav_menu([
            'theme_location' => 'footer-menu',
            'container_class' => 'footer-menu-class',
            ]);
            @endphp
            <span class="secondary copyright">
                @php echo '&copy; ' . date('Y') . ' Copyright H-FARM.'; @endphp
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

<script>
    console.log(document.querySelector("body").style.height)

</script>
