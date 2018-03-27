<?php
include 'C:\xampp\htdocs\vscodephpproject\newerrorpage.php';
$array = array('sai','surya','bhagi');
echo implode(",", $array);
$str = 'mammal,eleplant,eagle,bat';
$tr= explode(',',$str);
 sort($array);
print_r($tr);


?>