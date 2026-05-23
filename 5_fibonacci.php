<html>
<head>
<title>Fibonacci Numbers</title>
</head>
<body>
<h1>Fibonacci Numbers<br></h1>
<?php
$count = 10;
$num1 = 0;
$num2 = 1;
echo " <br>Fibonacci Series up to $count terms: ";
for ($i = 0; $i < $count; $i++)
{
echo $num1 . " ";
$next = $num1 + $num2;
$num1 = $num2;
$num2 = $next;
}
?>
</body>
</html>