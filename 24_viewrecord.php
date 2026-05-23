<html> 
<head> 
    <title>View data</title> 
</head> 
<body> 
    <h1>View Records<br></h1> 
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
            echo "id : " . $row["id"]. "<br> Name : " . $row["firstname"]. " " . 
            $row["lastname"]."<br>"."Email :".$row["email"]."<br> Registration 
            Date :".$row["reg_date"]. "<br>"; 
        } 
   }  
else  
   { 
      echo "0 results"; 
   } 
mysqli_close($conn); 
?> 
</body> 
</html> 
