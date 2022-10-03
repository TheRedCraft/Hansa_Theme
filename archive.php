<?php get_header(); ?>

<?php

if(have_posts())
{
    echo "<div class='twitch-boxen'>";
    while(have_posts())
    {
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
    }
    echo "</div>";
}

?>

<?php get_footer(); ?>