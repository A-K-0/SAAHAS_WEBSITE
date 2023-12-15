<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $password = $_POST["password"];


    if (empty($email) || empty($password)) {
        $error = "Both email and password are required.";
    } else {
        
        $conn = new mysqli("localhost", "root", "", "adventure");

      
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $email = $conn->real_escape_string($email);
        $password = $conn->real_escape_string($password);

       
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = $conn->query($query);

        if ($result->num_rows == 1) {
            
            $_SESSION["logged_in"] = true;
            header("Location: FINALWEB.php");
            exit();
        } else {
          
            $error[] = "Invalid email or password. Please try again.";
        }

       
        $conn->close();
    }
}
?> 





<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
  
   <link rel="stylesheet" href="c.css">
   <link rel="stylesheet" href="style.css">

</head>
<body>
<nav class="navbar glass" style="height: 70px">
            <span
                ><a href="#home" style="display: flex; align-items: center"
                    ><img
                        class="img2"
                        src="/img/mountain.png"
                        width="40"
                        style="margin: -25px -10px -25px -20px"
                    />
                    <h1 class="logo">&nbsp;SAAHAS</h1></a
                ></span
            >
        </nav>
       
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
if (isset($error) && is_array($error)) {
    foreach ($error as $errorMessage) {
        echo "<p>$errorMessage</p>";
    }
}
?>

      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>

