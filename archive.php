<?php
/*
Template Name: Archives
*/
get_header(); ?>
<style>
  :root {
    --hover-link-color: #5a5a5a;
  }

  .link {
      color: black;
      transition: 125ms ease-in-out;
      text-decoration: none;
  }

  .link:hover {
      color: var(--hover-link-color);
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

  .category-link {
    color: black;
    text-decoration: none;
    transition: 125ms ease-in-out;
  }

  .category-link:hover {
  color: var(--hover-link-color)
  }
</style>

<?php

$categories = get_categories();
foreach($categories as $cat) {
  echo '<h1><a class="category-link" href="'.get_category_link($cat->cat_ID) .'">' . $cat->name .'</a></h1>';

  $catPostArgs = array('posts_per_page' => 3, 'category' => $cat->cat_ID);
  $catPost = get_posts($catPostArgs);
  foreach ($catPost as $post) : setup_postdata($post);
?>

<div class="post">
  <h4>
    <a
      class="link"
      href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
    </a>
  </h4> 

  <p class="excerpt"><?php the_excerpt(); ?></p>
  <a href="<?php the_permalink(); ?>">Read More</a>
</div>

<?php
  endforeach;
  get_footer();
}
?>

