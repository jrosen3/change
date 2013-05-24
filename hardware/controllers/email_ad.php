<?php
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

	/*****
	$to = "jaredarosen@gmail.com";
	$subject = "HTML email";

	$message = "
	<html>
		<head>
			<title>HTML email</title>
		</head>
		<body>
			<p>This email contains HTML Tags!</p>
			<table>
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
				</tr>
				<tr>
					<td>John</td>
					<td>Doe</td>
				</tr>
			</table>
		</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	// More headers
	$headers .= 'From: <webmaster@example.com>' . "\r\n";
	$headers .= 'Cc: jrosen3@aol.com' . "\r\n";

	mail($to,$subject,$message,$headers);
	*****/
?>