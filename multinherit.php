<?php
class car
{ 
public function function_car(){
echo "car name is A";
}
}
class car1 extends car
{
public function function_car1(){
echo "car name is B";
}
}
class car2 extends car1
{
public function function_car2()
{
echo "car name is c";
}
}
echo car2::function_car2();
echo car2::function_car1();
echo car2::function_car();
?>

