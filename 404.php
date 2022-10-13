<?php 
get_header();

echo "<div style=' margin-left: 5vw; height: 20vh; width: 100%;'></div>";

echo "<h2 style=' margin-left: 5vw; '>ERROR 404: Leider nichts gefunden, diese Seite gibt es nicht.</h2>";

echo "<br><br><h2 style=' margin-left: 5vw; '>Eine zufaellige Seite findest du hier:</h2>";

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'category__not_in' => array(get_cat_ID('sliderImg')),
    'orderby' => 'rand'
  );

  $loop = new WP_Query($args);

  if( $loop->have_posts())
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
  } else {
    echo "No Searchresults found";
  }


get_footer();
?>