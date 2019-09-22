<?php
echo "<h2>CALL BY VALUE </h2>";
function swap1($a, $b)
{
 $temp = $a;
 $a = $b;
 $b = $temp;
 
 echo "<u>After calling function swap</u> <br> First char :".$a." , Second char: ".$b."\n";
}
 
$a = "Sakshi";
$b = "Bansal";
 
swap1($a, $b);
echo "<br><u>Outside function swap </u><br> First char :".$a.",  Second char : ".$b."</h2>"; 


echo "<h2>CALL BY REFERENCE </h2>";

function swap2(&$a, &$b)
{
 $temp = $a;
 $a = $b;
 $b = $temp;
 
 echo " <u>After calling function swap </u><br>First char: ".$a." , Second char: ".$b."\n";
}
 
$a = "Sakshi";
$b = "Bansal";

swap2($a, $b);

echo "<u><br>Outside function swap </u><br> First char :".$a.",  Second char :".$b; 