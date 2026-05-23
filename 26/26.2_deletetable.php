<html>
<head>
    <title>Delete Record</title>
</head>

<body>

<h1>View Record</h1>

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

$id = $_POST['id'];

$sql = "DELETE FROM MyGuests WHERE id='$id'";

if (mysqli_query($conn, $sql))
{
    echo "Record deleted successfully";
    echo "<br><br>";

    echo "<b><u>Data After Deletion</u></b>";
    echo "<br><br>";

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
}
else
{
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>

</body>
</html>