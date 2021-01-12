<?php
  //get_header();
  wp_head();
?>
<div id="navbar">
    <div class="container">
        <a class="back" href="javascript:history.go(-1)">←</a>
        <a class="title">
            <?php single_post_title(); ?>
        </a>
    </div>
</div>

<?php
  echo "<div class=\"container\">";
  echo "<article class=\"article\">";
  echo "<a class=\"back\" href=\"javascript:history.go(-1)\">←</a>";
?>

<h1 class="text-focus-in">
    <?php single_post_title(); ?>
</h1>

<main class="text-focus-in">
    <?php echo get_the_content(); ?>
</main>
</article>

<?php get_footer(); ?>

<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
// When the user scrolls to the top of the page, slide up the navbar (50px out of the top view)
window.onscroll = function() {
    scrollFunction()
};
const threshold = 400

function scrollFunction() {
    if (document.body.scrollTop > threshold || document.documentElement.scrollTop > threshold) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-80px";
    }
}
</script>