<?php
require'phpmailer/PHPMailerAutoload.php';
$mail= new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host='smtp.gmail.com';
$mail->Port=465;
$mail->isHTML();
$mail->Username='crisron81782@gmail.com';
$mail->Password='25322589';

$mail->Subject='hello';
$mail->Body='test mail';
$mail->AddAddress('2017.ankush.shetty@ves.ac.in');
$mail->Send();

?>