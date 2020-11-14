<?php
/*
Template Name: Archives
*/
get_header(); ?>
<style>
  .link {
      color: black;
      transition: 125ms ease-in-out;
      text-decoration: none;
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

$categories = get_categories();
foreach($categories as $cat) {
  echo '<h1>' . $cat->name .'</h1>';

  $catPost = get_posts(get_cat_ID($cat->name));
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
}
?>

