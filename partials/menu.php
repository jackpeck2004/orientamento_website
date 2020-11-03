<div class="menu-wrapper">
    <nav class="page-menu">

            <script>
                let target;
                const targetDevice = () => {
                    let links = document.getElementById(target);
                    let width = window.innerWidth;
                    if(width <= 1000) {
                        target = "mobile"
                    } else {
                        target = "desktop"
                    }

                    if(target === "mobile") {
                        document.getElementById("desktop").style.display = "none"
                        document.getElementById("mobile").style.display = "block"
                    } else {
                        document.getElementById("desktop").style.display = "block"
                        document.getElementById("mobile").style.display = "none"
                    }
                }
                window.addEventListener('resize', () => targetDevice());
                window.addEventListener('load', () => targetDevice());


            </script>
        <div class="container navbar">
            <a class="title">
                <?php echo get_bloginfo('name'); ?>
            </a>
            <div id="desktop" class="links">
                <?php
    wp_nav_menu( array( 
        'theme_location' => 'header-menu', 
        'container_class' => 'header-menu-class' ) ); 
    ?>
            </div>
        <div id="mobile" class="links">
        <div class="opener">
        <h1>=</h1>
        </div>
        <div class="menu-mobile">
        <?php
wp_nav_menu( array(
    'theme_location' => 'header-menu',
    'container_class' => 'header-menu-class-mobile' ) );
?>
        </div>
        </div>
        </div>
    </nav>
        <script>
        let isOpen = false;
        const menu = document.querySelector(".menu-mobile")
        const opener = document.querySelector(".opener")

        function refreshMenu() {
            if(isOpen) {
                menu.style.display = "block";
            } else {
                menu.style.display = "none";
            }
        }

        opener.addEventListener("click", () => {
            isOpen = !isOpen;
            refreshMenu();
        })


        refreshMenu();
        </script>
</div>