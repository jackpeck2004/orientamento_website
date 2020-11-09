<?php
/*
Template Name: Archives
*/
get_header(); ?>

    <style>
        .link {
            color: #303030;
            transition: 125ms ease-in-out;
        }

        .link:hover {
            color: #5a5a5a;
        }

        .post {
            border: 1px solid #303030;
            margin: 5% 0%;
            padding: 2% 4%;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            transition: 500ms;
        }

        .post:hover {
            -webkit-box-shadow: 7px 7px 29px 0px rgba(188, 188, 188, 0.77);
            -moz-box-shadow: 7px 7px 29px 0px rgba(188, 188, 188, 0.77);
            box-shadow: 7px 7px 29px 0px rgba(188, 188, 188, 0.77);
        }
    </style>

<?php
//for each category, show all posts
$cat_args = array(
    'orderby' => 'name',
    'order' => 'ASC'
);
$categories = get_categories($cat_args);
foreach ($categories as $category) {
    $args = array(
        'showposts' => -1,
        'category__in' => array($category->term_id),
        'caller_get_posts' => 1
    );
    $posts = get_posts($args);
    if ($posts) {
        echo '<h1>' . $category->name . ' </h1> ';
        foreach ($posts as $post) {
            setup_postdata($post); ?>
            <a style="display: block" href="<?php the_permalink() ?>">
                <div class="post">
                    <h4><a class="link" href="<?php the_permalink() ?>" rel="bookmark"
                           title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                    <p><?php the_date(); ?></p>
                </div>
            </a>

            <?php
        } // foreach($posts
    } // if ($posts
} // foreach($categories
?>

<?php get_footer(); ?>