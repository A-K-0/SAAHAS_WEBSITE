<?php
if (isset($_POST['submit'])) {
    // Form has been submitted

    // Process form data here
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $remarks = isset($_POST['remarks']) ? $_POST['remarks'] : '';

    // Database connection
    $conn = new mysqli('localhost:3307', 'root', '', 'adventure');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO fb(name, Email, city, remarks) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $city, $remarks);

    // Execute the statement
    $execval = $stmt->execute();

    // Check for success or failure
    if ($execval) {
        echo "Submitted Successfully";
        
        // Redirect to the main page
        header("Location: /FINALWEB.php");
        
        // Stop further execution
        die();
    } else {
        echo "Error: " . $stmt->error;
    }
    

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>