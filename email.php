<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'includes/PHPMailer/Exception.php';
require 'includes/PHPMailer/PHPMailer.php';
require 'includes/PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';       // Gmail SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'saphalkarki54@gmail.com'; // Your Gmail address
    $mail->Password   = 'jntnypmfgrhbopfm';       // Your Gmail App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS encryption
    $mail->Port       = 587;

    // Recipients
    $mail->setFrom('saphalkarki54@gmail.com', 'Saphal');
    $mail->addAddress('amanmndl653@gmail.com', 'aman');

    // Content
    $mail->isHTML(false); // Plain text
    $mail->Subject = 'hello dost';
    $mail->Body    = 'kaise ho ? thik ho na';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>