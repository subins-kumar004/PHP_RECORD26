<html>
<head>
<title>Class and Object</title>
</head>
<body>
<h1>Demonstrate Class and Object <br></h1>
<?php
class Person
{
public $firstName;
public $lastName;
public function getFullName()
{
return $this->firstName . ' ' . $this->lastName;
}
public function display()
{
echo "Hi, My name is " . $this->getFullName() . ".";
}
}
$person1 = new Person();
$person1->firstName = "Subin";
$person1->lastName = "S. Kumar";
$person1->display();
?>
</body>
</html>