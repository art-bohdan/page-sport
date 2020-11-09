<?php
// These must be at the top of your script, not inside a function
use PhpMailer\PhpMailer;
use PHPMailer\SMTP;
use PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];

// Настройки
$mail = new PHPMailer;

$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
$mail->isSMTP();                                            // Send using SMTP
$mail->Host = 'smtp.gmail.com';                   // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username = 'przemek.stupnowicz'; // Ваш логин в Яндексе. Именно логин, без @yandex.ru                   // SMTP username
$mail->Password = '951015Pp!';                             // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port = 465;                            
$mail->setFrom('przemek.stupnowicz@gmail.com'); // Ваш Email
$mail->addAddress('bohdanprog@gmail.com'); // Email получателя.

// Письмо
$mail->isHTML(true); 
$mail->Subject = "Заголовок"; // Заголовок письма
$mail->Body    = "Имя $name . Телефон $number . Почта $email"; // Текст письма

// Результат
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'ok';
}
?>