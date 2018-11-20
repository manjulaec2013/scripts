<html>
<form name="item" method="post">
<select name="Item">
    <option value="apple">Apple</option>
    <option value="mango">mango</option>
   <option value="banana">Banana</option>
</select>
<input type="submit" name="Submit" value="submit">

</form>
</html>

<?php
echo  $_POST[Item];
?>
