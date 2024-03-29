<?php get_header(); ?>

<?php

$oberstufe;
$termine;


if(have_posts())
{
    while(have_posts())
    {
      the_post();
      echo "<div class='single-post-thumbnail-div' style='background-image: url(".get_the_post_thumbnail_url().")'></div>";
      if(get_the_title() == 'Oberstufe'){
        $oberstufe = 'true';
      }
      else {
        $obersufe = 'false';
      }
      if(get_the_title() == 'Termine') {
        $termine = 'true';
      } else {
        $termine = 'false';
      }
        echo "<div class='single-post'>";
        the_title('<h2 class="single-post-heading">', '</h2>');
        echo "<div class='single-post-content'>";
          the_content();
        echo "</div>";
      echo "</div>";
    }
}

if ($termine == 'true') {
  echo "<div class='calender-box'>";
  echo "<div class='calender-buttons'>";
  echo "<button onclick='beforeMonth()'>Vorheriger Monat</button>";
  echo "<button onclick='nextMonth()'>Nachfolgender Monat</button>";
  echo "</div>";
  echo "<table id='kalender'></table>";
  echo "<div class='calender-buttons'>";
  echo "<button onclick='beforeMonth()'>Vorheriger Monat</button>";
  echo "<button onclick='nextMonth()'>Nachfolgender Monat</button>";
  echo "</div>";
  echo "</div>";
  echo "<script src='/wordpress/wp-content/themes/Hansa_Theme/calender.js'></script>";
  $file = fopen("http://wp.hansa-gymnasium.de/wp-content/themes/Hansa_Theme-master/calenderimgparsed.txt","r");


  while(! feof($file))
    {
      $line = trim(fgets($file));
      echo '<script>addToCalender(`'.$line.'`)</script>';
    }

  fclose($file);

  echo "<script>makeCalenderData();makeCalender();</script>";
}

if ($oberstufe == 'true')
  {
    wp_reset_postdata();
    $args = array(
      'post_per_page' => 100,
      'category_name' => 'oberstufe',
      'order' => 'ASC',
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
    echo "<script>make_Oberstufe();</script>";
  }

?>

<?php get_footer(); ?>
