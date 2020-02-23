<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 2</title>
</head>
<body>


    <?php
       
        $my_favorite_things = array ("Phone","Pen", "Plants", "Apples"  );
        
    ?>
<h1>My Favorite Things</h1>
<ol>
   
    <?php   
     $counter=0;    
     while ($counter < count($my_favorite_things)){
        echo "<li>". $my_favorite_things[$counter]."</li>"."</br>";
        $counter++;       

     }
     ?>
  
  </ol>      
    </body>

