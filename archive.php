<?php

/*
 Template Name: Archives
 */



get_header(); ?>
<?php

global $query_string;

query_posts($query_string . "&posts_per_page=100");

if(have_posts())
{
    echo "<div style=' margin-left: 5vw; height: 20vh; width: 100%;'></div>";
    echo "<div class='twitch-boxen'>";
    while(have_posts())
    {
        the_post();
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
        wp_reset_postdata();
    }
    echo "</div>";
}

?>

<?php get_footer(); ?>
