<?php
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

// Set mailer to use SMTP
$mail->isSMTP(); 

// Define SMTP host (e.g., Gmail SMTP)
$mail->Host = "smtp.gmail.com"; 

// Enable SMTP authentication
$mail->SMTPAuth = true;

// Set SMTP encryption type (ssl/tls)
$mail->SMTPSecure = "tls"; 

// Set SMTP port
$mail->Port = 587;

// Set Gmail username
$mail->Username = "langatkevoh18@gmail.com"; 

// Set Gmail password
$mail->Password = "eczhxcdqkbkgkczb";

// Set sender email address
$mail->setFrom("langatkevoh18@gmail.com", "Kevoh");

// Set recipient email address
$mail->addAddress("langatkevin75@gmail.com", "langatkevin75@gmail.com"); 

// Set email subject
$mail->Subject = "Test email using PHPMailer"; 

// Create the button HTML
$button = '<a href="https://www.google.com" style="background-color: #007bff; color: #ffffff;
padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: bold;">
Get help from Bard</a>';

// Set the email body as HTML
$mail->isHTML(true);

// Build the HTML email content
$mail->Body = '
    <html>
    <head>
        <title>HTML Email with Button</title>
    </head>
    <body>
        <h1>Welcome to my website</h1>
        <p>This is a test email with a button:</p>
        ' . $button . '
    </body>
    </html>';

// Send the email
if ($mail->send()) { 
    echo "Email sent successfully!";
} else { 
    echo "Error: " . $mail->ErrorInfo; 
}

// Close the SMTP connection
$mail->smtpClose();
?>
