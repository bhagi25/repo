<?php
$time = time();
 echo "The current date and time is: " .date('D M Y @ H:i:s', $time). '<br>';
 echo "The current date and time with an hour ago is: " .date('d M Y @ H:i:s', $time-60). '<br>';
 echo "The current date and time with in a week ago is: " .date('d M Y @ H:i:s', $time-(7*(6*24)*30*30)). '<br>';
 echo "The current date and time with added a week after is: " .date('d M Y @ H:i:s', strtotime('+1 week 2 hours 58 min')). '<br>';

 if(isset($_POST['clickme']) || !empty($_POST['clickme']))
{
    echo "you have rolled :" .rand(1,6);
}
?>

<form action="example9.php" method="POST">
<input type="submit" name="clickme" value="roll me"/>
</form>