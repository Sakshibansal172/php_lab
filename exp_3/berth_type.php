<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<form method="get">
		Enter seat number : 
		<input type="number" name="seat">
		<input type="submit" name="submit">
	</form>
</center>

</body>
</html>

<?php

if($_GET)
{
	$num = $_GET['seat'];
}
if(($num % 8 )== 1 || ($num % 8) == 4)
{
	echo "<h2> $num is LOWER BERTH.</h2>";
}
elseif(($num % 8 == 2) || ($num % 8 == 5))
{
	echo "<h2> $num is MIDDLE BERTH.</h2>";
}
elseif(($num % 8 ==3) || ($num % 8 == 6))
{
	echo "<h2> $num is UPPER BERTH.</h2>";
}
elseif($num % 8 == 7)
{
	echo "<h2> $num is SIDE LOWER BERTH.</h2>";
}
else
{
	echo "<h2> $num is SIDE UPPER BERTH.</h2>";

}
?>

