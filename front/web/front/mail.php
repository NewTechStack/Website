<?php
if (!isset($_POST['message']) || !isset($_POST['email']) || !isset($_POST['name']) || empty($_POST['message']) || empty($_POST['email']) || empty($_POST['name'])) {
  header('Status: 301 Moved Permanently', false, 301);
  header('Location: /');
  exit();
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './mail/Exception.php';
require './mail/PHPMailer.php';
require './mail/SMTP.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->Host = 'smtp.newtechstack.fr';
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->Username = 'eliot@newtechstack.fr';
$mail->Password = '';
$mail->From     = "eliot@newtechstack.fr";
$mail->addAddress('admin@newtechstack.fr', 'Admin');
$mail->isHTML(true);
$mail->Subject = 'Contact from newtechstack.fr [' . $_POST['name'] . ']';
$mail->Body    = 'From: ' . $_POST['name'] . ' | ' . $_POST['email'] . '<br>' . $_POST['message'];
$mail->AltBody = 'From: ' . $_POST['name'] . ' | ' . $_POST['email'] . ': ' . $_POST['message'];

if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
