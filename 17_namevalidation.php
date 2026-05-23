<html> 
<head> 
    <title>Element Name Validation</title> 
<style> 
    .error {color:red;} 
</style> 
</head> 
<body> 

<?php 

$nameErr = ""; 
$name = $email = $gender = $comment = $website = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST")  
{ 
    // ONLY NAME VALIDATION
    if (empty($_POST["name"]))  
    { 
        $nameErr = "Name is required"; 
    }  
    else  
    { 
        $temp_name = test_input($_POST["name"]); 
        
        if (!preg_match("/^[a-zA-Z-' ]*$/", $temp_name))  
        { 
            $nameErr = "Only letters and white space allowed"; 
        } 
        else 
        { 
            $name = $temp_name;  
        } 
    } 

    // NO VALIDATION FOR OTHER FIELDS
    $email = $_POST["email"] ?? "";
    $website = $_POST["website"] ?? "";
    $comment = $_POST["comment"] ?? "";
    $gender = $_POST["gender"] ?? "";
} 

function test_input($data)  
{ 
    $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data); 
    return $data; 
} 

?> 

<h2>PHP Form Name Field Validation</h2>
<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

Name: <input type="text" name="name"> 
<span class="error">* <?php echo $nameErr;?></span><br><br> 

E-mail: <input type="text" name="email"><br><br>  

Website: <input type="text" name="website"><br><br> 

Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br> 

Gender: 
<input type="radio" name="gender" value="female">Female 
<input type="radio" name="gender" value="male">Male 
<input type="radio" name="gender" value="other">Other 
<br><br> 

<input type="submit" name="submit" value="Submit"> 

</form> 

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST")  
{ 
    echo "<h2>Your Input:</h2>"; 
    
    if (empty($nameErr))  
    { 
        echo "Name: " . $name . "<br>"; 
    } 
    
    echo "Email: " . $email . "<br>"; 
    echo "Website: " . $website . "<br>"; 
    echo "Comment: " . $comment . "<br>"; 
    echo "Gender: " . $gender . "<br>"; 
} 
?> 

</body> 
</html>