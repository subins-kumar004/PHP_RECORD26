<html>
<head>
<title>Factorial</title>
</head>

<body>

<h1>Factorial of a number</h1>

<?php

$number = 4;

echo "Given value is 4 <br>";

$fact = factorial($number);

echo "<br> The factorial of $number is : $fact";

function factorial($n)
{
    if ($n <= 1)
    {
        return 1;
    }
    else
    {
        return $n * factorial($n - 1);
    }
}

?>

</body>
</html>