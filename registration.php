

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	

<body>
		<form method="post" action="regCheck.php">
			
			 First Name: <input type="text" name="firstname" placeholder="First Name" required><br>
			 Last Name: <input type="text" name="lastname" placeholder="Last Name" required><br>
			 Email: <input type="text" name="email" placeholder="Email" style="border: 0px; width: 200px;" pattern="[^ @]*@[^ @]*.com" required><br> 
			 User Name: <input type="text" name="username" placeholder="Username" required><br></p>
			 Password: <input type="Password" name="password" placeholder="Password (6 or more characters)" pattern=".{6,}" title="Must contain at least 6 or more characters" required><br></p>
			 Confirm Password: <input type="Password" name="confirmpassword" placeholder="Re-enter Password" pattern=".{6,}" title="Password doesn't match" required> <br></p>
			<input type="radio" name="gender" value="Male"> Male<br>
			<input type="radio" name="gender" value="Female"> Female<br>
			<input type="radio" name="gender" value="Others"> Others<br>
			
			<input type="submit" name="submit" value="Signup">	<br>
		</div>
	</form>

</body>
</head>
</html>