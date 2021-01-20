<?php 
wp_head();

require_once('partials/menu.php');

$background_image = get_field('background_image');
?>

<main class="home">
    <div style="background-image: <?php echo 'url(\'' . $background_image["url"] . '\')' ?>; background-size: cover; background-repeat: no-repeat; background-position: center"
        class="front-page">
        <div class="bg-image">
            <div class="content">
                <div class="container">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
        <div class=" body container text-focus-in">
            <?php the_content(); ?>
            <?php get_footer(); ?>
        </div>
    </div>
</main>