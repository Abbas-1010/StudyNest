<?php
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'C:/xampp/htdocs/mini_project/PHPMailer/src/Exception.php';
require 'C:/xampp/htdocs/mini_project/PHPMailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/mini_project/PHPMailer/src/SMTP.php';

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';               // Specify SMTP server
    $mail->SMTPAuth   = true;                             // Enable SMTP authentication
    $mail->Username   = 'studynest96@gmail.com';         // SMTP username
    $mail->Password   = 'plxw aefg bbiz lqpw';                  // SMTP password
    $mail->SMTPSecure = 'tls';   // Enable TLS encryption
    $mail->Port       = 587;                              // TCP port

    // Recipients
    $mail->setFrom('studynest96@gmail.com', 'StudyNest');
    $mail->addAddress('sabiyasalmashaik@gmial.com');                // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome to Our Website';
    $mail->Body    = '<h1>Thank you for signing up!</h1><p>We\'re excited to have you.</p>';
    $mail->AltBody = 'Thank you for signing up! We\'re excited to have you.'; // Plain text for non-HTML clients

    // Send the email
    if ($mail->send()) {
        echo 'Message has been sent';
    } else {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
