<?php
class Mycircle
{
static $pi=3.14;
static function newArea($a)
{
return self::$pi*$a*$a;
}
}
echo Mycircle::$pi;
echo Mycircle::newArea(10);
?>
