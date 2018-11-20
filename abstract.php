<?php
abstract class shape
{
public $x=100,$y=13;
abstract public function getArea();
}
 class rectangle extends shape
{
public function getArea()
{
echo  $this->x * $this->y ;
} 
}
?>
