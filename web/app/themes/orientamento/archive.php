<?php
/*
Template Name: Archive
*/
get_header(); ?>

<div class="archive">

    <?php
$categories = get_categories();
foreach($categories as $cat) {
  //echo '<h1><a class="category-link" href="'.get_category_link($cat->cat_ID) .'">' . $cat->name .'</a></h1><div class="posts">';
  echo <<<EOF
<div class="category">
<p>Category:</p>
EOF;
  echo '<h1 class""><a class="category-link hero-title" href="'.get_category_link($cat->cat_ID) .'">' . $cat->name .'</a></h1><div class="posts">';

  $catPostArgs = array('posts_per_page' => 3, 'category' => $cat->cat_ID);
  $catPost = get_posts($catPostArgs);
  foreach ($catPost as $post) : setup_postdata($post);
?>

    <div class="post">
        <h4>
            <a class="link" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h4>

        <p class="excerpt"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>">Read More</a>
    </div>

    <?php
  endforeach;
?>
</div>
<?php
echo '<a class="read-more" href="'.get_category_link($cat->cat_ID) .'"> Read more from ' . $cat->name .'</a>';
echo <<<EOF
</div>
</div>
EOF;
}
  get_footer();
?>