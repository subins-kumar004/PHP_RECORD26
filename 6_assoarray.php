<html>
<head>
<title>Array Sorting</title>
</head>
<body>
<h1>Array Sorting<br></h1>
<?php
$assocArray = array( "Amal" => 50,
"Yadhu" => 30,
"Kevin" => 20,
"Rahul" => 40
);
echo "Original Array:\n";
print_r($assocArray);
echo"<BR>";
echo"<BR>";
asort($assocArray);
echo "\nSorted by Value (Ascending Order):";
print_r($assocArray);
echo"<BR>";
echo"<BR>";
arsort($assocArray);
echo "\nSorted by Value (Descending Order):\n";
print_r($assocArray);
echo"<BR>";
echo"<BR>";
ksort($assocArray);
echo "\nSorted by Key (Ascending Order):\n";
print_r($assocArray);



echo"<BR>";
echo"<BR>";
krsort($assocArray);
echo "\nSorted by Key (Descending Order):\n";
print_r($assocArray);
?>
</body>
</html>