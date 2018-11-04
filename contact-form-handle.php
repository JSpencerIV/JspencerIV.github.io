<?php
   	$name = $_POST['name']
   	$vistor_email = $_POST['email'];
   	$message = $_POST['message'];


   	$email_from = 'jspenceriv79@gmail.com';

   	$email_subject = "New Form Submission";

   	$email_body = "User Name: $name.\n".
   					"User Email: $visitor_email.\n".
   						"User Message: $message.\n";


   	$to = "jspenceriv79@gmail.com";

   	$headers = "From: $email_from \r\n";

   	$headers = "Reply-To: $visitor_email \r\n";

   	mail($to,email_subject,$email_body,$headers);

   	header("Location: jspenceriv.com.html");

?>