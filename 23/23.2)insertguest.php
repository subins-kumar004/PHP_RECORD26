<html> 
<head> 
    <title>Form</title> 
</head> 
<body> 
    <h1>Form Input Data<br></h1> 
<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "mydatabase"; 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
if (!$conn) 
   { 
     die("Connection failed: ".mysqli_connect_error()); 
   } 
$sql1="INSERT INTO MyGuests(firstname, 
 
lastname,email)VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[email]')"; 
if (mysqli_query($conn, $sql1))  
   { 
     echo "New record added successfully"."<br>"; 
   }  
else  
   { 
     echo "Error:".$sql1."<br>".mysqli_error($conn); 
   } 
print_r($_POST); 
mysqli_close($conn) 
?> 
</body> 
</html>