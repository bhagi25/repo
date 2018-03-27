
<?php

$offset = 0;

if(isset($_POST['input']) && isset($_POST['search']) && isset($_POST['replace']))
{
    $var = $_POST['input'];
   $search = $_POST['search'];
    $replace = $_POST['replace'];
    $len = strlen($search);
   if(!empty($var) && !empty($replace) && !empty($search))
    {
       while($strpos = strpos($var,$search,$offset))
       {
        echo is_numeric($strpos);
        echo $strpos. '<br>';
        echo $offset = $strpos + $len. '<br>';
    
       }
    //  var_dump($strpos);
   //$ting = str_replace($search,$replace,$var);
   //echo $ting;
   }   
   else
   {
       echo "replace fail";
   } 
 
    
}
?>

<form action="example8.php" method="POST">
Enter the Text:
<textarea name="input" rows="7" cols="30"></textarea><br>
Search for: 
<input type="text" name="search"/>
Replace for:
    <input type="text" name="replace"/><br>
    <input type="submit" name="submit">
</form>