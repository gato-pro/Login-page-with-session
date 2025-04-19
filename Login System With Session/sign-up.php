<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  $username = trim($_POST["username"]);
  $email = trim($_POST["email"]);
  $password = trim($_POST["password"]);
  
  
  
 $userData = fopen("UserData.txt", "a");
 $record = "$username~$email~$password\n";
 
 fwrite($userData, $record);
 
 fclose($userData);
 
 header("Location: Login.php");
}    



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css">
    
    <title>SIGN UP</title>
</head>
<body>
    
    <form method="post" action="sign-up.php">
        <h1>Sign Up</h1>
        
        <label for="username" class="text">Name</label>
        <br><br>
        <input type="text" name="username" id="username" placeholder="Username" required>
        
        
        <br><br>
    <label for="email" class="text">Email</label> 
       <br>
        <br>  
<input type="email" name="email" id="email" placeholder="Email address" required>


<br><br>

<label for="password" class="text">Password</label>
      <br>
        <br>
<input type="password" name="password" id="password" placeholder="Password" required>



<br><br>

<input type="submit" value="SIGN UP" id="btn">

        
    </form><br>
   
   <div class="suggestion">Already have an account?<br>
   <a href="Login.php" class="link">Log In</a>
   </div>
    
</body>
</html>
