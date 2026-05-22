<html> 
<head> 
    <title>Element Email & URL Validation</title> 
<style> 
    .error {color:red;} 
</style> 
</head> 
<body> 

<?php 

$nameErr = $emailErr = $genderErr = $websiteErr = ""; 
$name = $email = $gender = $comment = $website = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST")  
{ 
    // NAME (NO VALIDATION REQUIRED, ONLY INPUT)
    $name = $_POST["name"] ?? "";

    // EMAIL VALIDATION
    if (empty($_POST["email"])) { 
        $emailErr = "Email is required"; 
    } else { 
        $email = $_POST["email"]; 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))  
        { 
            $emailErr = "Invalid email format"; 
        } 
    } 

    // URL VALIDATION
    if (empty($_POST["website"])) { 
        $websiteErr = "URL is required"; 
    } else { 
        $website = $_POST["website"]; 
        if (!filter_var($website, FILTER_VALIDATE_URL))  
        { 
            $websiteErr = "Invalid URL"; 
        } 
    } 

    // COMMENT (NO VALIDATION)
    $comment = $_POST["comment"] ?? "";

    // GENDER (NO VALIDATION REQUIRED)
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

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

Name: <input type="text" name="name"><br><br>

E-mail: <input type="text" name="email"> 
<span class="error">* <?php echo $emailErr;?></span><br><br> 

Website: <input type="text" name="website"> 
<span class="error">* <?php echo $websiteErr;?></span><br><br> 

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

    echo "Name: " . $name . "<br>"; 

    if (empty($emailErr)) { 
        echo "Email: " . $email . "<br>";   
    } 

    if (empty($websiteErr)) { 
        echo "Website: " . $website . "<br>";   
    }  

    echo "Comment: " . $comment . "<br>"; 
    echo "Gender: " . $gender . "<br>"; 
} 
?> 

</body> 
</html>