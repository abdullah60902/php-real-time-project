<?php
// Include PHPMailer's autoload file
require 'vendor/autoload.php'; // Adjust the path if necessary

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG .= "Name is required. ";
} else {
    $name = htmlspecialchars($_POST["name"]);
}

// Number
if (empty($_POST["number"])) {
    $errorMSG .= "Number is required. ";
} else {
    $number = htmlspecialchars($_POST["number"]);
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required. ";
} else {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMSG .= "Invalid email format. ";
    }
}

// SUBJECT


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required. ";
} else {
    $message = htmlspecialchars($_POST["message"]);
}

$EmailTo = "butt60902@gmail.com"; // Change recipient email to butt60902@gmail.com
$Subject = "Tendercare Management Web"; // Subject for the email

// Prepare email body text
$Body = "Name: $name\n";
$Body .= "Number: $number\n";
$Body .= "Email: $email\n";
$Body .= "Message: $message\n";

// Send email using PHPMailer
if (empty($errorMSG)) {
    $mail = new PHPMailer(true); // Create a new PHPMailer instance

    try {
        //Server settings
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'tendcareapp@gmail.com'; // SMTP username
        $mail->Password = 'xccmfoherzbwhqwd'; // SMTP password (make sure this is correct)
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587; // TCP port to connect to

        //Recipients
        $mail->setFrom('tendcareapp@gmail.com', $name); // Set the sender email and name
        $mail->addAddress($EmailTo); // Add the recipient's email

        // Content
        $mail->isHTML(false); // Set email format to plain text
        $mail->Subject = $Subject;
        $mail->Body    = $Body;

        $mail->send();
        // Redirect to success page
        header("Location: index.php?message=" . urlencode("Success! Your message has been sent."));
    } catch (Exception $e) {
        // Redirect with error message
        header("Location: index.php?message=" . urlencode("Error: Mail could not be sent. PHPMailer Error: {$mail->ErrorInfo}"));
    }
} else {
    // Redirect with error message
    header("Location: index.php?message=" . urlencode("Error: " . $errorMSG));
}
?>
