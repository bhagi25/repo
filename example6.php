<?php

$str = 'this is  the string.This is an example';
$str1 = 'is';
$offset = 0;
$len = strlen($str1);
echo $len;
while ($ab = strpos($str,$str1,$offset)) 
{
    echo $str1. ' found at ' .$ab;
    echo "<br>";
   $offset = $ab + $len;
   echo $offset. "<br>";
}
$repl = 'are';
$r = array('is','a','string','example');
$re = array('US','a','String','Example');
//echo str_replace('is','  ',$str);
echo str_replace($r,$re,$str);
//echo substr_replace($str,$repl,5,2);
?>