<?php get_header(); ?> 
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

</style>
<?php 
echo "<a href=\"javascript:history.go(-1)\">Back</a>";

if ( have_posts() ) : ?>

<h1><?php single_cat_title( '', true ); ?></h1>

<?php 
  $cat_ID = get_the_category()[0]->cat_ID;
  $catPostArgs = array('category' => $cat_ID);
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
  endif;
?> 
<?php get_footer(); ?> 
