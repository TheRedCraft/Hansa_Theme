<?php get_header(); ?>

<h1>News</h1>

<?php 

if(have_posts())
{
    $i = 0;
    echo "<div class='twitch-boxen'>";
    while(have_posts() && $i <= 7)
    {
        the_post();

        if(in_category('News'))
        {
            echo "<div class='twitch-box'>";
            echo "<div class='content'>";
            the_post_thumbnail();
            the_title('<h2>', '</h2>');
            echo "</div>";
            echo "<div class='twitch-border-effect'>";
            echo "<div class='top-corner'></div>";
            echo "<div class='bottom-corner'></div>";
            echo "</div>";
            echo "</div>";
            $i += 1;
        }else
        {
            echo '';
        }
    } 
    echo "</div>";
} else
{
    echo 'No Posts where Found';
}

?>

<?php get_footer(); ?>