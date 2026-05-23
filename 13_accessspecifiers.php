<html>
<head>
<title>Access Specifiers in PHP</title>
</head>
<body>
<h2>Demonstration of Access Specifiers</h2>
<?php
class Fruit
{
public $name;
protected $color;
private $weight;
function setName($n)
{
echo "Name: $n <br>";
}
function setColor($c)
{
echo "Colour: $c <br>";
}
function setWeight($w)
{
echo "Weight: $w (Access Restricted) <br>";
}
}
$fruit = new Fruit();
$fruit->setName("Apple");
$fruit->setColor("Red");
$fruit->setWeight("200");
?>
</body>
</html>