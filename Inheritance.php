<?php
class Car
{
private $mode1;
public function setMode1($mode1)
{
$this -> mode1= $mode1;
}
public function hello()
{
return "the car model is" . $this->mode1;
}
}
class sportsCar extends Car
{
}
$sportsCar1=new sportsCar();
$sportsCar1->setmode1("BMW");
echo $sportsCar1->hello();

?>
