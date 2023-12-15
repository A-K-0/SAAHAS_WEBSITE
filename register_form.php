
<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["cpassword"];

   
    if (empty($name) || empty($email) || empty($password) || empty($confirmPassword)) {
        $error[] = "All fields are required.";
    } elseif ($password !== $confirmPassword) {
        $error[] = "Passwords do not match.";
    } else {
        
        $conn = new mysqli("localhost", "root", "", "adventure");

      
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

     
        $name = $conn->real_escape_string($name);
        $email = $conn->real_escape_string($email);
        $password = $conn->real_escape_string($password);

      
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

        try {
            $result = $conn->query($query);

            if ($result) {
               
                $_SESSION["registered"] = true;
                header("Location: login_form.php");
                exit();
            } else {
              
                $error[] = "Registration failed. Please try again.";
            }
        } catch (mysqli_sql_exception $e) {
            
            if ($e->getCode() == 1062) { 
                $error[] = "Email address or its password already exists, Please choose a different one.";
            } else {
                $error[] = "Error: " . $e->getMessage();
            }
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
   <title>register form</title>

 
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
      <h3>register now</h3>
      <?php
    if (isset($error) && is_array($error)) {
    foreach ($error as $errorMessage) {
        echo "<p>$errorMessage</p>";
    }
    }
    ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>