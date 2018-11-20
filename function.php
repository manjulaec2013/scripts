<?php
class person
{
 var $name;
 function __construct($person_name)
 {
  $this->name=$person_name; 
 }
  function get_name()
 {
  return $this->name;
  }
 protected function set_name($new_name)
 {
  if($this->name!="abcd") 
  {
  $this->name=strtoupper($new_name);

  
  }
 }
}
 class employee extends person
{
 protected function set_name($new_name)
 {
 if($new_name="pqrs")
  {
 $this->name=$new_name;
  }
 }
 function __construct($employee_name)
 {
 $this->set_name($employee_name);
   }
}
?>
