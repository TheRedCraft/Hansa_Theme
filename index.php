<?php get_header(); ?>

<?php 

if(have_posts())
{
    while(have_posts())
    {
        the_post();

        echo '<h2>';
        the_title();
        echo '</h2>';

        the_content();
    }
}

?>

<?php get_footer(); ?>