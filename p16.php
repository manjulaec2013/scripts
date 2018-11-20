<?php

function addfive($num)
{
$num+=5;
}
function addsix($num)
{
$num+=6;
}

$origin=10;
addfive($origin);

echo "origin value is $origin</br>";

addsix($origin);

echo "origin value is $origin</br>";

?>
