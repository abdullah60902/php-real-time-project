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

// NUMBER
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

// START DATE
if (empty($_POST["date"])) {
    $errorMSG .= "Start Date is required. ";
} else {
    $date = htmlspecialchars($_POST["date"]);
}

// POSITION
if (empty($_POST["position"])) {
    $errorMSG .= "Position is required. ";
} else {
    $position = htmlspecialchars($_POST["position"]);
}

// COVER LETTER
if (empty($_POST["message"])) {
    $errorMSG .= "Cover Letter is required. ";
} else {
    $message = htmlspecialchars($_POST["message"]);
}

// Handle file upload
if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $fileType = $_FILES['image']['type'];

    // File type and size validation
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($fileType, $allowedTypes)) {
        $errorMSG .= "Only JPG, PNG, and GIF files are allowed. ";
    }

    if ($fileSize > 2 * 1024 * 1024) { // Limit file size to 2MB
        $errorMSG .= "File size should not exceed 2MB. ";
    }
} else {
    $errorMSG .= "CV is required or not uploaded correctly. ";
}

$EmailTo = "butt60902@gmail.com"; // Change recipient email
$Subject = "Job Application from Tendercare Management Web";

// Prepare email body text
$Body = "Name: $name\n";
$Body .= "Phone Number: $number\n";
$Body .= "Email: $email\n";
$Body .= "Position: $position\n";
$Body .= "Start Date: $date\n";
$Body .= "Cover Letter: $message\n";

// Send email using PHPMailer
if (empty($errorMSG)) {
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tendcareapp@gmail.com'; // SMTP username
        $mail->Password = 'xccmfoherzbwhqwd'; // SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('tendcareapp@gmail.com', $name);
        $mail->addAddress($EmailTo);

        // Content
        $mail->isHTML(false); // Set email format to plain text
        $mail->Subject = $Subject;
        $mail->Body    = $Body;

        // Add attachment
        if (isset($fileTmpPath)) {
            $mail->addAttachment($fileTmpPath, $fileName); // Attach the uploaded file
        }

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
