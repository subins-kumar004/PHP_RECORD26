<html>
<head>
<title>Inheritance</title>
</head>
<body>
<h1>Demonstrate the Inheritance <br></h1>
<?php
class Car
{
public $name;
public $color;
function __construct($name, $color)
{
$this->name = $name;
$this->color = $color;
}
function intro()
{
echo "<br>The Car is {$this->name} and the color is {$this->color}.";
}
}
class Bmw extends Car
{
function message()
{
echo "I am BMW.";
}
}
$Obj = new Bmw("BMW M5", "Red");
$Obj->message();
$Obj->intro();
?>
</body>
</html>

