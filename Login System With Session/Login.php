<?php
session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and trim input values
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Basic validation for empty fields
    if (empty($username) || empty($password)) {
        echo "<div class='fields'>Please enter both username and password.</div>";
    } else {
        // Reading data file
        $data1 = file("UserData.txt");

        foreach ($data1 as $data2) {
            // Explode using correct delimiter and check for credentials
            $user1 = explode("~", $data2);

            if ($username == trim($user1[0]) && $password == trim($user1[2])) {
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;
                //I know we shouldn't store password inside of a sessions!

           
         header("Location: index.php");
                exit();
            }
        }

        
        
        echo "<div class='fields'>Invalid username or password.</div>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css">
    <title>Login page</title>
</head>
<body>
    
  
    
    
    
    
    
    
    
    <form method="post" action="Login.php">
        <h1>Log In</h1>
        
        <label for="username" class="text">Name</label>
        <br>
        <br>
        <input type="text" name="username" id="username" placeholder="Username">
        
        
        <br><br>
        
        
        <label for="password" class="text">Password</label>
        <br>
        <br>
        <input type="password" name="password" id="password" placeholder="Password">
        
        
        <br><br>
        
        
        
        <input type="submit" value="LOG IN" id="btn">
        
        
        <br><br>
        

    </form><br>
    
            <div class="suggestion">Don't have any account?
    
        <br>
   <a href="sign-up.php" class="link">Sign up</a>
   </div>
   
   
</body>
</html>
