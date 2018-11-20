<?php
class Tshape
{
const pi=3.142;
function _call($fname, $argument)
{
if($fname == 'area')
switch(count($argument)){
case 0 : return 0;
case 1 : return self::pi*$argument[0];
case 2 : return $argument[0] * $argument[1];
}
}
}
$circle= new Tshape();
echo"area of circle is ".$circle->area(5)."</br>";
$rect= new Tshape();
echo "area of rectangle is ".$rect->area(5,10);
?>




