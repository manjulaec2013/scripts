<html>
   <body>
      
      <?php
         $marks = array( 
            "abcd" => array (
               "physics" => 35,
               "maths" => 30,	
               "chemistry" => 39
            ),
            
            "orange" => array (
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
            ),
            
            "mango" => array (
               "physics" => 31,
               "maths" => 22,
               "chemistry" => 39
            )
         );
         
        
         echo "Marks in physics : " ;
         echo $marks['abcd']['physics'] . "<br />"; 
         
         echo "Marks in maths : ";
         echo $marks['orange']['maths'] . "<br />"; 
         
         echo "Marks in chemistry : " ;
         echo $marks['mango']['chemistry'] . "<br />"; 
      ?>
   
   </body>
</html>
