

<!DOCTYPE html>
<html>
<head>
	<title>Select package</title>
	

<body>
		<form method="post" action="home.php">
			
			 Package Id: <input type="text" name="Package Id" placeholder="Package Id" required><br>
			 Package: <input type="text" name="Package" placeholder="Package" required><br>
			 Tourist Places: <input type="text" name="place" placeholder="Tourist Place" required><br> 
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