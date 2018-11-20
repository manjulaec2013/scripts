<?php
class foo{
 public $name;
public $link;
public function __construct($name)
{
 $this->name=$name;
}
public function setLink(foo $link)
{
$this->link = $link;
}
public function __destruct()
{
 echo "destroying".$this->name,PHP_EOL;
}
}
$foo=new foo('foo 1');
$bar=new foo('f00 2');
$foo->setLink($bar);
$bar->setLink($foo);
$foo=null;
$bar=null;
$foo=null;
$bar=null;
echo "end";
PHP_EOL;
?>
