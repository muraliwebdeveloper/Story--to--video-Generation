<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate input
    if (empty($name) || empty($email) || empty($message)) {
        echo "<script>alert('All fields are required.'); window.history.back();</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format.'); window.history.back();</script>";
        exit;
    }

    // Send email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'muralipraba425@gmail.com'; // Your Gmail address
        $mail->Password = 'ziup dqqf lcrm airz'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('muralipraba425@gmail.com', 'Mailer');
        $mail->addAddress('muralipraba425@gmail.com', 'Recipient Name'); // Add a recipient

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "Name: $name<br>Email: $email<br><br>Message:<br>$message";
        $mail->AltBody = "Name: $name\nEmail: $email\n\nMessage:\n$message";

        $mail->send();
        $emailSent = true;
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}'); window.history.back();</script>";
        exit;
    }

    // Save to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cmidle";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        echo "<script>alert('Connection failed: " . $conn->connect_error . "'); window.history.back();</script>";
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        $recordSaved = true;
    } else {
        echo "<script>alert('Error: " . $stmt->error . "'); window.history.back();</script>";
        exit;
    }

    $stmt->close();
    $conn->close();

    if ($emailSent && $recordSaved) {
        echo "<script>alert('Message has been sent and record saved successfully.'); window.location.href = 'index.html';</script>";
    } elseif ($emailSent) {
        echo "<script>alert('Message has been sent but record could not be saved.'); window.history.back();</script>";
    } elseif ($recordSaved) {
        echo "<script>alert('Record saved successfully but message could not be sent.'); window.history.back();</script>";
    }
}
?>
