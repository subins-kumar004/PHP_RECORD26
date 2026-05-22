<html> 
<head> 
    <title>Updated data</title> 
</head> 
<body> 
    <h1>Data After Updation <br></h1> 
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
$sql = "UPDATE MyGuests SET firstname='$_POST[firstname]' WHERE 
id='$_POST[id]'"; 
if (mysqli_query($conn, $sql))  
   { 
        echo "Record updated successfully"; 
        echo "<br><br>"; 
        echo "<b><u>Updated Data</u></b>"; 

echo "<br>"; 
        $sql = "SELECT * FROM MyGuests"; 
        $result = mysqli_query($conn, $sql); 
        if (mysqli_num_rows($result) > 0)  
        { 
            while($row = mysqli_fetch_assoc($result))  
            { 
                echo "id: " . $row["id"]. "<br> Name: " . $row["firstname"]. " " . 
                $row["lastname"]."<br>"." Email:".$row["email"]."<br> Registration 
                Date:".$row["reg_date"]. "<br>"; 
            } 
        }  
        else  
        { 
            echo "0 results"; 
        } 
   }  
else  
   { 
      echo "Error updating record: " . mysqli_error($conn); 
   } 
mysqli_close($conn); 
?> 
</body> 
</html> 