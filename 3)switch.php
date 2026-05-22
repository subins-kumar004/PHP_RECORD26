<html>
<head>
<title>Day of the Week</title>
</head>
<body>
<h1>Day of week using switch.<br></h1>
<?php
$dayOfWeek = date("D");
echo "Current day is ", $dayOfWeek , "<br>";
switch($dayOfWeek)
{
case "Sun": $dayName = "Sunday";
break;
case "Mon": $dayName = "Monday";
break;
case "Tue": $dayName = "Tuesday";
break;
case "Wed": $dayName = "Wednesday";
break;
case "Thu": $dayName = "Thursday";
break;
case "Fri": $dayName = "Friday";
break;
case "Sat": $dayName = "Saturday";
break;
default: $dayName = "Invalid day";
}
echo "<br>Today is " . $dayName ;
?>
</body>
</html>