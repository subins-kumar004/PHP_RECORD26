<html>
<head>
<title>Interface</title>
</head>
<body>
<h1>Demonstrate Interface</h1>
<?php
interface Animal
{
public function sound();
}
class Dog implements Animal
{
public function sound()
{
echo "Woof...Woof...";
}
}
$myDog = new Dog();
echo "<strong>Dog's Sound :</strong>";
$myDog->sound();
?>
</body>
</html>