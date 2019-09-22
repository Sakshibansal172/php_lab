<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<br>
<?php 
	$num =$_GET['num']; 
	if($num%2==0) 
	{ 
		echo "$num is an even number"; 
	} 
	else 
	{ 
		echo "$num is an Odd number."; 
	}

	echo"<h2> Table of the entered number :</h2>";

	for($i=1;$i<=10;$i++) 
	{
		$c = $i * $num; 
		echo " $i * $num = $c <br>";
	} 

	echo "<h2>Sum of square of digits of entered number :</h2> ";

 	$sum = 0;
	for ($i =0; $i<=strlen($num);$i++)  
 	{  
  		$rem=$num%10;  
   		$sum = $sum + ($rem*$rem);  
   		$num=$num/10;  
  	}   
	echo "<br>The squared sum = $sum";
?> 
 
</body>
 </html> 
 
 