<?php
	session_start();


	$con=mysqli_connect('localhost:3000','root','');
	mysqli_select_db($con,'cd');

	$email=$_POST['email'];
	$name=$_POST['user'];
	$pass=hash('sha512',$_POST['password']);
	$token=bin2hex(random_bytes(15));

	$subject="Email Activiation";
	$body=" Hello how are you ";
	$sender_email="From: nakshaj1999@gmail.com";

	$s=" select * from registration where email ='$email' OR name='$name'";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);

	if($num==1){
		//echo "Name Aldready taken";
		
		header("Location: signupTest.php");
		echo '<script>alert("username or email aldready exists")</script>';

		
	}
	else{
		$reg="insert into registration(email,name,password,token,status) values ('$email','$name','$pass','$token','Inactive')";
		

			if(mail($email, $subject, $body, $sender_email)){
				//$_SESSION['msg']="Activation link sent to your mail";
				mysqli_query($con,$reg);
				header("Location: login.php");
			}
			else{
				header("Location: signupTest.php");
			}


		//echo "Registration Successful";
	}


?>




