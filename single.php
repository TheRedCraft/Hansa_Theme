<?php get_header(); ?>

<?php

$falafel;

if(have_posts())
{
    while(have_posts())
    {
      the_post();
      if(get_the_title() == 'oberstufe'){
        $falafel = 'true';
      }
      else {
        $falafel = 'false';
      }
        echo "<div class='single-post'>";
        the_title('<h2 class"single-post-heading>', '</h2>');
        echo "<div class='single-post-content'>";
          the_content();
        echo "</div>";
      echo "</div>";
    }
}


if ($falafel == 'true')
  {
    wp_reset_postdata();
    $args = array(
      'post_per_page' => 100,
      'category_name' => 'oberstufe'
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

  }

?>

<?php get_footer(); ?>
