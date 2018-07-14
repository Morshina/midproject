<?php

	if(isset($_POST['submit'])){

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$gender   = $_POST['gender'];

/*
		if($first == "" || $last == "" || $email == "" || $username == "" || $password == "" || $confirmpassword == "" || $gender == ""){

			//echo "invalid submission";
			header("location: registration.php");
*/
			if($firstname == "" || $lastname == "" || $email == "" || $username == "" || $password == "" || $confirmpassword == "" || $gender == ""){

			//echo "invalid submission";
			header("location: registration.php");

		}else{

			$myfile = fopen("user.txt", 'a');
			$data = $firstname."|".$lastname."|".$email."|".$username."|".$password."|".$confirmpassword."|".$gender."\r\n";
			fwrite($myfile, $data);
			fclose($myfile);

			header("location: login.php");

		}
	}
?>