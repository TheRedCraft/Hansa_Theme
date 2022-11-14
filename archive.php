<?php

/*
 Template Name: Archives 
 */



get_header(); ?>

<?php

if(have_posts())
{
    echo "<div style=' margin-left: 5vw; height: 20vh; width: 100%;'></div>";
    echo "<div class='twitch-boxen'>";
    while(have_posts())
    {
        echo "<a href='".get_the_permalink()."'>";
        the_post();
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
