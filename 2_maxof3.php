<html>
<head>
<title>Maximum of three numbers</title>
</head>
<body>
<h1>Maximum of three numbers. <br></h1>
<?php
$num1 = 10;
$num2 = 25;
$num3 = 15;
echo "Value of num1 is 10 <br>";
echo "Value of num2 is 25 <br>";
echo "Value of num3 is 15 <br>";
if ($num1 > $num2)
{
if ($num1 > $num3)
{
$max = $num1;
}
else
{
$max = $num3;
}
}
else
{
if ($num2 > $num3)
{
$max = $num2;
}
else
{
$max = $num3;
}



}
echo "<br> The maximum of " . $num1 . ", " . $num2 . " and " . $num3 . " is : " . $max . "\n";
?>
</body>
</html>