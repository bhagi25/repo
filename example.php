<?php

$x = $_SERVER['REMOTE_ADDR'];
function address()
{
    global $x;
    $string = " IP address is= " ;
    $count = str_word_count($string,1);
    echo $string. " " .$x;
    echo "<br>";
    print_r($count);
    $str = str_shuffle($string);
    echo $str;
    /*random character generation*/
    $you =" ghf627q6ieywd089oq83ir0182uhyhdjsmbxn ";
    $pattern = str_shuffle($you);
    $half = substr($str,0,7);  /*here oly 7 digits random character is generated*/
    $half1 = substr($pattern,1,strlen($pattern)/2); /*half of the string returned*/
    echo "the string is: " .$half;
    echo "<br>";
    echo  "the pattern is: " .$half1;
    echo "<br>";
    $pln= "this is a happy day!!!";
    echo "<br>";
    echo strrev($pln);
     $ring = "I\'m saying, that my essay is about my mom and daddy";  /*to know the % of similarity b/w strings"
*/
$ring1 = "My essay is about my in-laws";
similar_text($ring,$ring1,$result);
echo "the similarty is, \n" .$result;

}
address();
?>