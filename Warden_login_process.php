<?php
session_start();

// Check submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['your_wname'];
    $password = $_POST['your_wpass'];

    // Connect to database
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "accommodations";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user data from the database
    $sql = "SELECT * FROM wardenlogin WHERE username='$name' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        //  successful
        $_SESSION['email'] = $email;
        // Redirect
        header("Location: Warden_index.php");
        exit();
    } else {
        // failed
        echo "Invalid email or password.";
        
    }

    $conn->close();
}
?>