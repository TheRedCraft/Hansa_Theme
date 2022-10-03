<?php get_header(); ?>

<?php 
    
    $id = $_GET['id'];

    $args = array(
        'p' = $id
    )
if(have_posts())
{
    while(have_posts())
    {
        the_post();
        the_title();
        the_content();
    }
}
?>

<?php get_footer(); ?>