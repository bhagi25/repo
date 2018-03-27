<?php
$array1 = array('we','you','yours');
$replace = array('v','u','urs');
if(isset($_POST['input']) && !empty($_POST['input']))
{
  $vtext =  $_POST['input'];
  $array2 = str_ireplace($array1,$replace,$vtext);
  echo $array2;
}


?>

<form action="example7.php" method="POST">
Address:
<textarea name="input"></textarea><br>
<input type="Submit" name="submit"/>

</form>