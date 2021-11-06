<?php
	session_start();

//	$token=bin2hex(random_bytes(15));

	$email="nakshaj1999@gmail.com";
	$subject="Email Activiation";
	$body=" Hello how are you ";
	$sender_email="From: prakhar.baphna@gmail.com";
	if(mail($email, $subject, $body, $sender_email)){
		echo "Mail sent";
	}
	else{
		echo "Mail not sent";
	}
?>




