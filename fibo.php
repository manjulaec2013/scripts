<?php
$f=0;
$s=1;
echo "<br/>"; 
echo $f;
echo "<br/>" ;
echo $s;
 
for($limit=0;$limit<10;$limit++)
{
$t=$f+$s;
echo "</br>";
echo  $t;
$f=$s;
$s=$t;

}
?>




