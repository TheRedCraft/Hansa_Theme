<?php get_header(); ?>

<h1 class="section-heading">News</h1>

<?php

$args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 8,
  'category_name' => 'News'
);

$loop = new WP_Query($args);
?>
<?php if( $loop->have_posts()): ?>
  <div class='twitch-boxen'>
  <?php while($loop->have_posts()):?>
    <?php $loop->the_post(); $id = get_the_ID(); ?>
    <a href="/wordpress/">
    <div class='twitch-box'>
    <div class='content'>
    <?php the_post_thumbnail(); the_title('<h2 class="twitch-head">', '</h2>');?>
    </div>
    <div class='twitch-border-effect'>
    <div class='top-corner'></div>
    <div class='bottom-corner'></div>
    </div>
    </div>
    </a>
  <?php endwhile; ?>
  <p>test</p>
  </div>
  <?php endif; ?>

<?php

wp_reset_postdata();

echo "<h1 class='section-heading'>Startseite</h1>";

$args2 = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => 8,
  'category_name' => 'Startseite'
);

$loop2 = new WP_Query($args2);
?>

<?php if( $loop2->have_posts()): ?>
  <div class='twitch-boxen'>
  <?php while($loop2->have_posts()):?>
    <?php $loop2->the_post();
    $id = get_the_ID(); ?>
    <a href="/wordpress/">
    <div class='twitch-box'>
    <div class='content'>
    <?php the_post_thumbnail();
    the_title('<h2 class="twitch-head">', '</h2>');?>
    </div>
    <div class='twitch-border-effect'>
    <div class='top-corner'></div>
    <div class='bottom-corner'></div>
    </div>
    </div>
    </a>
  <?php endwhile; ?>
  </div>
  <?php endif; ?>

<?php

echo 'Index PHP';

?>

<?php get_footer(); ?>
