<?php get_header(); ?>

<?php 

if(have_posts())
{
    while(have_posts())
    {
        the_post();

        echo "<div class'POST-ID'>";
        echo '<h2>';
        the_title();
        echo '</h2>';
        the_content();
        echo "</div>";
    }
}

?>

<?php get_footer(); ?>