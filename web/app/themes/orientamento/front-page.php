<?php wp_head(); ?>
<?php require_once('partials/menu.php'); ?>

<main class="home">
    <div class="front-page">
        <div class="bg-image">
            <div class="content">
                <div class="container">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
        <div class="body container text-focus-in">
            <?php the_content(); ?>
            <?php get_footer(); ?>
        </div>
    </div>
</main>