<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<form method="get">
		Enter num1:   &emsp;&emsp;&emsp;  Enter num2: <br><br>
		<input type="number" name="num1">
		<input type="number" name="num2">
	<br><br><br>

	<input type="submit" value="-" name="select">
	<input type="submit" value="+" name="select">
	<input type="submit" value="*" name="select">
	<input type="submit" value="/" name="select">
	<input type="submit" name="submit">

</form>
</center>

</body>
</html>

<?php
if($_GET)
{
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	$select = $_GET['select'];
}
$value = 0;
if ($select == "-")
{
	$value = $num1 - $num2;
	echo "$num1 - $num2 = $value";
}
elseif ($select == "+") 
{
	$value = $num1 + $num2;
	echo "$num1 + $num2 = $value";
}
elseif ($select == "*") 
{
	$value = $num1 * $num2;
	echo "$num1 * $num2 = $value";
}
elseif ($select == "/") 
{
	$value = $num1 / $num2;
	echo "$num1 / $num2 = $value";
}
?>
