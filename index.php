<?php get_header(); ?>

<?php 

if(have_posts())
{
    while(have_posts())
    {
        the_post();

        echo "<div class'twitch-box'>";
        echo "<div class='content'>";
        the_title('<h2>', '</h2>');
        echo "</div>";
        echo "<div class='twitch-border-effect'>";
        echo "<div class='top-corner'></div>";
        echo "<div class='bottom-corner'></div>";
        echo "</div>";
        echo "</div>";
    }
} else
{
    echo 'No Posts where Found';
}

?>

<?php get_footer(); ?>