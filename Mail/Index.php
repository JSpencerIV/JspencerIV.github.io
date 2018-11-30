<?php
  require 'phpmailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;
  //$mail -> isSMTP()
  $mail->Host ='smtp.gmail.com';
  $mail->Port = 587;
  $mail->SMTP = true;
  $mail->SMTPSecure='tls';

  $mail->UserName='spenceriv79@gmail.com';
  $mail->Password='2020$p3nc3r';

  $mail->setfrom('spenceriv@gmail.com','John Spencer');
  $mail->addAddress('jspenceriv79@gmail.com');
  $mail->addReply('spenceriv@gmail.com');

  $mail->isHTML(true);
  $mail->Subject='PHP Mailer Subject';
  $mail->Body='<h1 align-center> Contact for more Information</h1>';
  if(!$mail->send()){
  	echo "message could not be sent!";
  }
  else{
  	echo "Message has been sent!";
  }

?>
