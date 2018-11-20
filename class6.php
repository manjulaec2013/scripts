<?php
class Myclass
{
protected static $val='parent';
public static  function getVal()
{
return self::$val;
}
}
class child extends Myclass
{
protected static $val='child';
}
echo child::getVal();
?>


