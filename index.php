<!-- This is the main body of the PHP home page -->
<?php 
get_header(); 

 while(have_posts()) {
    the_post();  ?>
    <h2> <a href = "<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
    <?php the_content(); ?>
    <hr>
 <?php   
 }

?>

All of the above are "Posts".

Click <a href="http://fictional-university.local/test-page-123/">here</a> to go to "page 123", which uses 'page.php'

<?php 
get_footer();
?>