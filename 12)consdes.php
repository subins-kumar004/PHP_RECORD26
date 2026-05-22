<html>
<head>
<title>Constructor and Destructor</title>
</head>
<body>
<h1>Implement Constructor and Destructor</h1>
<?php
class Animal
{
public $animal_name;
public function __construct($animal_name)
{
echo "<br>I'm alive!<br>";
$this->animal_name = $animal_name;
}
public function __destruct()
{
echo "I'm dead now<br>";
}
}
$animal = new Animal("Dog");
echo "Name of the animal: " . $animal->animal_name . "<br>";
?>
</body>
</html>