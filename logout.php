<?php
// Include database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cmidle";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Close the database connection
mysqli_close($conn);

// Redirect to the home page
header("Location: login.html"); // Assuming index.php is your home page
exit;
?>
