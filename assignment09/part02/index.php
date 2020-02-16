<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 2</title>
</head>
<body>
    
    <?php
       
        $my_favorite_things = array ("Phone","Pen", "Plants", "Apples"  );
        
    ?>

    <h1>My Favorite Things</h1>

     <?php   
     $counter=0;    
     while ($counter < count($my_favorite_things)){
        echo ($counter+1).".". $my_favorite_things[$counter]."</br>";
        $counter++;       

     }
     ?>
        

    </body>

