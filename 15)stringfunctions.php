<html>
<head>
<title>String functions</title>
</head>
<body>
<h1>String Functions </h1>
<?php
$str1 = "Welcome";
$str2 = "PHP";
echo "<b>String 1:</b> $str1 <br>";
echo "<b>String 2:</b> $str2 <br><br>";
echo "<b>Length of string 1:</b> " . strlen($str1) . "<br>";
echo "<b>Length of string 2:</b> " . strlen($str2) . "<br><br>";
$concat = $str1 . " " . $str2;
echo "<b>Concatenated String:</b> " . $concat . "<br><br>";
echo "<b>String Comparison:</b> ";
if (strcmp($str1, $str2) == 0)
{
echo "Strings are equal<br>";
} else
{
echo "Strings are different<br>";
}
$copystr = $str1;
echo "<br><b>Copied String:</b> " . $copystr . "<br><br>";
echo "<b>String 1 Uppercase:</b> " . strtoupper($str1) . "<br><br>";



echo "<b>String 2 Lowercase:</b> " . strtolower($str2) . "<br>";
?>
</body>
</html>

OUTPUT