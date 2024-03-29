<?php get_header(); ?>
<?php

$keyword = $_GET['s'];

$search_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 800,
    'category__not_in' => array(get_cat_ID('sliderImg')),
    's' => $keyword,
    'order_by' => 'relevance'
  );

  $search_loop = new WP_Query($search_args);

  echo "<div style=' margin-left: 5vw; height: 20vh; width: 100%;'></div>";
  if( $search_loop->have_posts())
  {
    echo "<div class='twitch-boxen'>";
    while($search_loop->have_posts())
    {
      $search_loop->the_post();
      echo "<a href='".get_the_permalink()."'>";
      echo "<div class='twitch-box'>";
      echo "<div class='content'>";
      the_post_thumbnail();
      echo "<div class='twitch-box-date'>";
      echo get_post_custom_values('date')[0];
      // the_date('d M Y');
      echo "</div>";
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

?>

<?php get_footer(); ?>
