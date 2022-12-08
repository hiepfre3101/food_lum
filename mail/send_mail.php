<?php
require_once "send_mail/src/Exception.php";
require_once "send_mail/src/OAuth.php";
require_once "send_mail/src/PHPMailer.php";
require_once "send_mail/src/POP3.php";
require_once "send_mail/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// tạo ra mã otp 6 chữ số
$otp = rand(100000, 999999);
setcookie('otp', $otp, time() + 600, '/');
$emailClient = $_GET['email'];
$idUser = $_GET['iduser'];
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'duongna16032003@gmail.com';                 // SMTP username
    $mail->Password = 'plgxkkiaoxclqwnj';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('duongna16032003@gmail.com', 'Food Lum');
    $mail->addAddress("$emailClient");     // Add a recipient
    //Attachments
    //Content

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'MA OTP CUA BAN LA';
    $mail->Body = 'MÃ xác thực của bạn là: ' . $otp;

    $mail->send();
//    trở về tranh nhập otp
    header("location:../index.php?ctr=enter-otp&&iduser=$idUser");
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
