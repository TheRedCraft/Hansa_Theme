<?php get_header(); ?>

<h1 class="section-heading">News</h1>

<?php

$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 8,
  'category_name' => 'news'
);

$loop = new WP_Query($args);

if( $loop->have_posts())
{
  echo "<div class='twitch-boxen'>";
  while($loop->have_posts())
  {
    $loop->the_post();
    echo "<div class='twitch-box'>";
    echo "<div class='content'>";
    the_post_thumbnail();
    the_title('<h2 class="twitch-head">', '</h2>');
    echo "</div>";
    echo "<div class='twitch-border-effect'>";
    echo "<div class='top-corner'></div>";
    echo "<div class='bottom-corner'></div>";
    echo "</div>";
    echo "</div>";
  }
  echo "</div>";
} else {
  echo "No Posts were Found";
}

wp_reset_postdata();

echo "<h1 class='section-heading'>Startseite</h1>";

$args2 = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 8,
  'category_name' => 'Startseite'
);

$loop2 = new WP_Query($args2);

if( $loop2->have_posts())
{
  echo "<div class='twitch-boxen'>";
  while($loop2->have_posts())
  {
    $loop2->the_post();
    echo "<div class='twitch-box'>";
    echo "<div class='content'>";
    the_post_thumbnail();
    the_title('<h2 class="twitch-head">', '</h2>');
    echo "</div>";
    echo "<div class='twitch-border-effect'>";
    echo "<div class='top-corner'></div>";
    echo "<div class='bottom-corner'></div>";
    echo "</div>";
    echo "</div>";
  }
  echo "</div>";
}

?>

<?php get_footer(); ?>
