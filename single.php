<?php get_header(); ?>

<?php

if(have_posts())
{
    while(have_posts())
    {
      the_post();
      echo "<div class='single-post'>";
        the_title('<h2 class"single-post-heading>', '</h2>');
        echo "<div class='single-post-content'>";
          the_content();
        echo "</div>";
      echo "</div>";
    }
}
?>

<?php get_footer(); ?>
