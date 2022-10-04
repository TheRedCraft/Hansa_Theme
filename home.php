<?php get_header(); ?>

<h2 class="section-heading">News</h2>

<?php

$args = array(
  'posts_per_page' => 8,
  'post_status' => 'publish',
  'post_type' => 'post',
  'category_name' => 'news'
);

$loop = new WP_Query($args);

if($loop->have_posts())
{
  echo "<div class='twitch-boxen'>";
  while($loop->have_posts())
  {
    $loop->the_post();
    echo "<a href='".get_the_permalink()."'>";
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
    echo "</a>";
  }
  echo "</div>";
}

?>

<h2 class="section-heading">Startseite</h2>


<?php

wp_reset_postdata();

$args2 = array(
  'posts_per_page' => 8,
  'post_status' => 'publish',
  'post_type' => 'post',
  'category_name' => 'startseite',
);

$loop2 = new WP_Query($args2);

if($loop2->have_posts())
{
  echo "<div class='twitch-boxen'>";
  while($loop2->have_posts())
  {
    $loop2->the_post();
    echo "<a href='".get_the_permalink()."'>";
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
    echo "</a>";
  }
  echo "</div>";
}

?>
<?php get_footer(); ?>
