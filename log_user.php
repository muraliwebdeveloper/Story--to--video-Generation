<?php
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

// Check if Email and Password are set in $_GET array
if (isset($_GET["email"]) && isset($_GET["pass"])) {
    $email = $_GET["email"];
    $pass = $_GET["pass"];

    $sql = "SELECT email, pass FROM Reg_user WHERE email='$email' AND pass='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row["email"] == $email && $row["pass"] == $pass) {
            header("location: dashboard.php");
        }
    } else {
        echo "INVALID E-MAIL/PASSWORD";
    }
} else {
    echo "Email or Password not provided";
}

mysqli_close($conn);
?>
