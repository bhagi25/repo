
<?php
/*$_GET retrieves variables from the querystring, or your URL.
$_POST retrieves variables from a POST method, such as (generally) forms.
$_REQUEST is a merging of $_GET and $_POST where $_POST overrides $_GET. 
Good to use $_REQUEST on self refrential forms for validations.*/
if(isset($_GET['uname']) && !empty($_GET['uname']))
{
   echo $name= $_GET['uname'];
}

?>

<form action="example3.php" method="GET">
   Name: <input type="text" name="uname"/>
    Password: <input type="text" name="pass"/>
    <input type="Submit" name="Submit"/>
</form>
