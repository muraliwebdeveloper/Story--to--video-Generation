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
$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["pass"];


$sql = "INSERT INTO Reg_user (name,email,pass)
VALUES ('".$name."','".$email."','".$pass."')";

if (mysqli_query($conn, $sql)) {
   echo "<script>alert('Submited  Successfully!');window.location.href='login.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>