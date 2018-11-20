<html>
   <body>
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Item: <input type = "text" name = "item" />
         Id: <input type = "text" name = "id" />
         <input type = "submit" />
      </form>
   </body>
</html>

<?php
echo"dynamic calling of function ";

function add()
{
$a=10;
$b=20;
$sum=$a+$b;

echo"sum is ";
}
$function_holder="add";
$function_holder();


 if( $_REQUEST["item"] || $_REQUEST["id"] ) {
      echo "item ". $_REQUEST['item']. "<br />";
      echo "its id ". $_REQUEST['id']. " <br/>";
      exit();
   }

?>
