<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
	<center>
	<form method="get">
		Enter num1:   &emsp;&emsp;&emsp;  Enter num2: <br><br>
		<input type="number" name="num1">
		<input type="number" name="num2">
	<br><br><br>
		<input type="submit" name="submit">
	</center>
</form>

</form>
</body>
</html>

<?php
if($_GET)
{
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
}

echo "<center><h2>Divisibles of 5 between $num1 and $num2 are :</h2></center>";
for ($i=$num1; $i<=$num2  ; $i++) 
{ 
	if($i % 5 == 0)
	{
		echo $i." ";
	}
}

echo "<center><h2>For prime number</h2><center>"; 
for($i=$num1;$i<=$num2;$i++) 
	{ 
		$c=0; 
		for($j=1;$j<=$i;$j++) 
		{ 
			if($i % $j==0) 
				$c++; 
		} 
		if($c==2) 
		{
			echo $i." "; 
		}
	} 
?> 