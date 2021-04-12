<?php

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

<?php ?>



<!-- This is our amazing custom theme.
<?php 
    function greet($name, $color){
        echo "<p> Hi! my name is $name and my favorite color is $color! </p>";
    }

greet("Danny", "blue");
?>

<h1> 
<?php bloginfo('name') ?>
</h1>

<p>
<?php bloginfo('description') ?>
</p> -->


