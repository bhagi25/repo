<html>
<body>

<form id="page" method="post">
    <table>
<tr><td>Username:</td><td> <input name="uname" id="uid" type="text"/></td></tr>
<tr><td>Password:</td><td> <input name="pass" id ="pass" type="text"/></td></tr>
<tr><td>Submit: </td><td><input type= "submit" name="submit" id="submit" value="submit"/></td></tr>
<tr>
<th colspan="2">  
<?php

include 'C:\xampp\htdocs\vscodephpproject\lession1.php';

    if(isset($_REQUEST['submit']))
    {
        $var1 = $_REQUEST['uname'];
        $var2 = $_REQUEST['pass'];
        echo $var1. $var2. "<br>"; 
        nameValidate($var1); 
        echo "end of prg";
        
    }
  
?>
</th> 
</tr>
</table>
</form>
</body>
</html>