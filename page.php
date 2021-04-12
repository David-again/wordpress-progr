<!-- This is used to load dynamic pages -->

<?php
get_header();
 while(have_posts()) {
    the_post();  ?>
    <h1> This is not a post.  It's a page!</h1>
    <h2> <?php the_title(); ?> </h2>
    <?php the_content(); ?>
 <?php   
 }
get_footer();
?>