<?php
function isPrime($n)
{
for($x=2;$x<$n;$x++)
{
if($n%$x==0)
{
return 0;
}
}
return 1;
}
$a=isPrime(5);
if($a==0)
echo"the number is prime";
else
echo"the number is not prime";
?>
