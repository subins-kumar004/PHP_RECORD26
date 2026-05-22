<html>
<head>
<title>Student Grade</title>
</head>
<body>
<h1>Grade of Student<br></h1>
<?php
$marks = 80;
echo "Mark of student is " , $marks , "<br>";
if ($marks >= 60)
{
$grade = "First Division";
}
elseif($marks >= 45 && $marks <= 59)
{
$grade = "Second Division";
}
elseif($marks >= 33 && $marks <= 44)
{
$grade = "Third Division";
}
else
{
$grade = "Fail";
}
echo "<br> Grade : " . $grade . "\n";
?>
</body>
</html>