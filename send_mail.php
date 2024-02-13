<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                       //gmail SMTP server set to send through
    $mail->SMTPAuth   = true;
    $mail->Username   = 'nguyenngoctridung.tce@gmail.com';                     //SMTP username (your gmail account)
    $mail->Password   = 'pemapvdyupictwpl';                               //SMTP password (your gmail password or app password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('nguyenngoctridung.tce@gmail.com', 'Mailer');         //Set the sender of the message (your email address)
    $mail->addAddress('nguyendong.rsc@gmail.com', 'Joe User');     //Add a recipient (your bae's email address)

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'test';
    $mail->Body    = 'test1';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}