<?php
	require_once("PHPMailer/class.phpmailer.php"); /*http://phpmailer.worxware.com/index.php?pg=install*/
	/*****
	$user_name = $_POST['user_name'];
	$to = $_POST['email'];;
	$subject = "Test mail";
	$message = "Hi $user_name,\r\nHere is the information you requested about //TODO:ad.";
	$from = "ericrosen@aol.com";
	$headers = "From: " . $from;
	mail($to, $subject, $message, $headers);
	echo "true";
	*****/

	
	$mail = new PHPMailer;

	$mail->IsSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.timewarner.com';  // Specify main and backup server
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'jswan';                            // SMTP username
	$mail->Password = 'secret';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

	$mail->From = 'ericrosen@aol.com';
	$mail->FromName = 'Eric Rosen';
	$mail->AddAddress('jaredarosen@gmail.com', 'Jared Rosen');  // Add a recipient
	//$mail->AddAddress('ellen@example.com');               // Name is optional
	$mail->AddReplyTo('info@example.com', 'Information');
	//$mail->AddCC('cc@example.com');
	//$mail->AddBCC('bcc@example.com');

	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	/*
	$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
	$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	*/
	$mail->IsHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Here is the subject';
	$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->Send()) {
	   echo 'Message could not be sent.';
	   echo 'Mailer Error: ' . $mail->ErrorInfo;
	   exit;
	}

	echo 'Message has been sent';
	
?>