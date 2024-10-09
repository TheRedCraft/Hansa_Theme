<?php get_header(); ?> <!--Header Code aus der Header.php laden-->

<?php

/* Test */
echo "<div class='main-content'>";

$argsWichtig = array( //wichtig post laden
  'posts_per_page' => 1,
  'category_name' => 'wichtig',
  'category__not_in' => array(get_cat_ID('sliderImg')),
);

$wichtigLoop = new WP_Query($argsWichtig);

if($wichtigLoop->have_posts()) //Twitch box für den wichtig post erstellen
{
  echo "<div class='twitch-boxen twitch-boxen-wichtig'>";
    while($wichtigLoop -> have_posts())
    {
      $wichtigLoop->the_post();
      echo "<div class='wichtig-post-box-new-style'>";
        echo "<div>";
          the_title('<h2>', '</h2>');
        echo "</div>";
          echo "<span class='wichtig-anker' href='".get_the_permalink()."'>"; // change to anker if needed, but makes complications with nested ankers, when ankers in wp_content();
        echo "<div class='wichtig-post-new-style-content'>";
          the_content();
        echo "</div>";
        echo "</span>";
        echo "<a class='wichtig-post-weiterlesen-button' href='".get_the_permalink()."'>weiterlesen</a>";
      echo "</div>";
    }
  echo "</div>";
}

wp_reset_postdata();

echo '<h2 class="section-heading">Was ist los am Hansa?</h2>'; //Überschrift hinzufügen


$args = array( //Argumente für News Post
  'posts_per_page' => 8,
  'post_status' => 'publish',
  'post_type' => 'post',
  'category_name' => 'news',
  'category__not_in' => array(get_cat_ID('sliderImg')),
);

$loop = new WP_Query($args);

if($loop->have_posts()) // Twitch boxen laden/einfügen
{
  echo "<div class='twitch-boxen'>";
  while($loop->have_posts())
  {
    $loop->the_post();
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
}

?>
  <a style="padding-left: 5vw; padding-top: 10px;" href="<?php echo get_site_url() ?>/category/news/">Älter Beiträge anzeigen.</a>
<h2 class="section-heading">Organisation</h2> <!--Überschrift-->


<?php

wp_reset_postdata();

$args2 = array( //Argumente statische Posts
  'posts_per_page' => 8,
  'post_status' => 'publish',
  'post_type' => 'post',
  'category_name' => 'startseite',
  'category__not_in' => array(get_cat_ID('sliderImg')),
);

$loop2 = new WP_Query($args2);

if($loop2->have_posts()) //Statische Posts einbinden/hinzufügen
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
echo "</div>";
?>
<?php get_footer(); ?> <!--Footer aus der Footer.php laden-->
