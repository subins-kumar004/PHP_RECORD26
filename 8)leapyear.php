<html>
<head>
<title>Leap Year</title>
</head>
<body>
<h1>Leap Year or not <br></h1>
<?php
function leapyear($year)
{
if($year % 100 == 0)
{
if($year % 400 == 0)
{
return true;
}
else
{
return false;
}
}
else
{
if($year % 4 == 0)
{
return true;
}
else
{
return false;
}
}
}



$year1 = 2024;
$year2 = 2021;
echo "Given year is 2024 and 2021.<br>";
if(leapyear($year1))
{
echo "<br>$year1 is a leap year.";
}
else
{
echo "<br> $year1 is not a leap year.";
}
if(leapyear($year2))
{
echo "<br>$year2 is a leap year.";
}
else
{
echo "<br> $year2 is not a leap year.";
}
?>
</body>
</html>