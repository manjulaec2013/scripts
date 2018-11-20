
<html>
<head>
<title>Dynamically Generate Select Dropdowns</title>
</head>

<body>
<form>
    <select>
        <option selected="selected">Choose item</option>
        <option value="item">
        </option>
     </select>
    <input type="submit" value="Submit">
</form>
</body>
</html>

<?php
 $items = array("Mobile", "Laptop", "Tablet", "Camera");
       foreach($items as $item){

echo $item;
}
?>
