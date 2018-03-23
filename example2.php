<?php
//include 'C:\xampp\htdocs\vscodephpproject\newerrorpage.php';
//where include displays the text after the include statement
require 'C:\xampp\htdocs\vscodephpproject\newerrorpage.php';
//here require kills all the statements after require if it has fatal error
$str = 'This is <img src="img.jpg"> an image.<br>';
$str1= addslashes($str);
echo stripslashes($str1);
$food = array('Healthy'=> 
                        array('pasta','pizza','salad','vegetables'), 
                        'Unhealthy'=>
                            array('icecream','snacks'));
/*print_r($food);
echo $food['Healthy'][0];
echo "<br>";
echo $food['Unhealthy'][1];*/
echo "<br>";
foreach($food as $element => $item)
{
  echo '<strong>' .$element. '</strong> <br>';

foreach($item as $item_array)
{
    echo $item_array. '<br>';
}
}
?>