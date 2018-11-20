<?php
$salaries = array("mohammada"=>2000,"quadir"=>1000,"zara"=>500);

echo "salaries of mohammada is " .$salaries['mohammada']."<br/>";
echo "salaries of quadir is ".$salaries['quadir']."<br/>";
echo "salaries of zara is " .$salaries['zara']."<br/>";

$salaries['mohammada']="2000";
$salaries['quadir']="1000";
$salaries['zara']="500";

echo "salaries of mohammada is " .$salaries['mohammada']."<br/>";
echo "salaries of quadir is " .$salaries['quadir']."<br/>";
echo "salaries of zara is " .$salaries['zara']."<br/>";

?>


