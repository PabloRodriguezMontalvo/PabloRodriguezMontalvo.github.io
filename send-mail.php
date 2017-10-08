<?php

	// site owner
	$to = "pablo.rodriguez@tajamar365.com";
	$subject = trim( $_POST['subject'] );

	// contact form fields
	$name = trim( $_POST['name'] );
	$email = trim( $_POST['email'] );
	$message = trim( $_POST['message'] );
	

	// check for error
	$error = false;
	
	if ( $name === "" )
	{
		$error = true;
	}
	elseif ( $email === "" )
	{
		$error = true;
	}
	elseif ( $message === "" )
	{
		$error = true;
	}
	// end check for error
	
	// no error send mail
	if ( !$error )
	{
		
		$body = "Name: $name \n\nEmail: $email \n\nMessage: $message";
		
		$headers = 'From: ' . $name . ' <' . $email . '> ' . "\r\n" . 'Reply-To: ' . $email . 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
		
		mail( $to, $subject, $body, $headers );
		
		echo 'success';
		
	}
	else
	{
		echo 'error';
	}
	// end no error send mail

	
?>