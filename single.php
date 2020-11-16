<?php
  get_header();
  echo "<a href=\"javascript:history.go(-1)\">Back</a>";
?>

<h1>
  <?php single_post_title(); ?>
</h1>

<main>
  <?php echo get_the_content(); ?>
</main>

<?php get_footer(); ?>
