<html>
<head>
    <title>Update Form Page</title>
</head>

<body>

<h1>Data Before Updation</h1>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM MyGuests";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "id: " . $row["id"] . "<br>";
        echo "Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Registration Date: " . $row["reg_date"] . "<br><br>";
    }
}
else
{
    echo "0 results";
}

?>

<h1>Form</h1>

<h2>Data to be Updated</h2>

<form action="25.2_updatedata.php" method="POST">

    First Name:
    <input type="text" name="firstname"><br><br>

    ID:
    <input type="text" name="id"><br><br>

    <input type="submit" value="Submit">

</form>

<?php
mysqli_close($conn);
?>

</body>
</html>