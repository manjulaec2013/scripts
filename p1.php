<?php
$numbers=array(1,2,3,4,5);
foreach($numbers as $v)
{
echo "value is $v<br/>";
}

$numbers[0]="one";
$numbers[1]="two";
$numbers[2]="three";
$numbers[3]="four";
$numbers[4]="five";
foreach($numbers as $v)
{
echo "value is $v<br/>";
}
?>

