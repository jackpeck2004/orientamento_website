<?php
/*
Template Name: Archives
*/
get_header(); ?>

    <style>
        .link {
            color: black;
            transition: 125ms ease-in-out;
            text-decoration: none
        ;
        }

        .link:hover {
            color: #5a5a5a;
        }

        .post {
            background: #fafafa;
            border-radius: 15px;
            padding: 2% 4%;
            margin-bottom: 100px;
        }

        .post:hover {
        }

        .post > .date {
            color: #8B8B8B;
            font-size: 1.2em;

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
            <?php

            function getMonth($month_number) {
                switch(intval($month_number)) {
                    case 1:
                        return "January";
                    case 2:
                        return "February";
                    case 3:
                        return "March";
                    case 4:
                        return "April";
                    case 5:
                        return "May";
                    case 6:
                        return "June";
                    case 7:
                        return "July";
                    case 8:
                        return "August";
                    case 9:
                        return "September";
                    case 10:
                        return "October";
                    case 11:
                        return "November";
                    case 12:
                        return "December";
                }
            }

                $event_date = get_post_meta($post->ID, 'event_date', true);
            if ($event_date) {

                $year = substr($event_date, 0, 4);
                $month = getMonth(substr($event_date, 5, 2));
                $day = substr($event_date, 8, 2);
                $time = substr($event_date, 11, 5);

                $format = $month . " " . $day. ", " . $year . " at " . $time ;
                echo '<p class="date">' . $format . '</p>';
            }

            else {
                echo '<i class="date">to be added...</i>';
            }

            ?>
                    <p class="excerpt"><?php the_excerpt() ?></p>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </a>

            <?php
        } // foreach($posts
    } // if ($posts
} // foreach($categories
?>

<?php get_footer(); ?>