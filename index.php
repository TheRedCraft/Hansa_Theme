<?php get_header(); ?>

<?php 

if(have_posts())
{
    while(have_posts())
    {
        the_post();

        echo "<div class'POST-ID'>";
        the_title('<h2>', '</h2>');
        the_content();
        echo "</div>";
    }
} else
{
    echo 'No Posts where Found';
}

?>

<?php get_footer(); ?>