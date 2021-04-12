This is our amazing custom theme.
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
</p>

<?php
 $names = array('Jenny', 'Jessie', 'Judie', 'Jackie', 'Jimmy');
  
 $count = 0;
 while($count < count($names)) {
     echo "<li> $names[$count] </li>";
     $count++;
 }


?>
