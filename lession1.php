

<?php
include 'C:\xampp\htdocs\vscodephpproject\newerrorpage.php';
echo "hello";
function nameValidate($str)
{
    if(preg_match('/bhagi/',$str))
    {
        echo "true";
        return;
    }
    else 
    echo "false";
}


?>