<html>
   <body>
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Id: <input type = "text" name = "id" />
         unit <input type="text"name="id"/> 
         <input type = "submit" />
      </form>
<?php
 $items= array( 
            "cola" => array (
               "id" => 35,
               "unit" => 30,
              ),

            "orange" => array (
               "id" => 30,
               "unit" => 32,
           )
);

echo "items are".$items['cola']['id'];
?>   </body>
</html>
