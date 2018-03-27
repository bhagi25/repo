<?php
/*$String = strlen('Bhagi_kondapally');
print_r($String);
$Str = 'bhagi';
echo strtolower($Str);
echo strtoupper($Str);
for($x=1;$x<$String;$x++) 
{
    echo " <br> The value of x is : " .$x;
}*/


if(isset($_POST['name']) && !empty($_POST['name']))
{
    $uname = $_POST['name'];
    $email = $_REQUEST['email'];
    //echo "the name entered is: ";
   // print_r($uname);
   var_dump($email);
    var_dump($uname);
    $password = $_POST['pass'];
   $len = strlen($password);
}
?>

<form action="example5.php"method="POST">
Uname: <input type ="text" name="name"/>
<br>
Password: <input type="password" name="pass"id="pass" placeholder="">
<script>
function fun()
{
    document.getElementById("pass").placeholder = "Type ur password";
}
</script>
<br>
email:<input type="text" name="email"/>

<br>
<input type = "submit" name="submit" onclick="fun()"/>
</form>