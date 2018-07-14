

<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	

<body>
		<form method="post" action="home.php">
			
			 Customer Id: <input type="text" name="Customer Id" placeholder="Customer Id" required><br> <br>
			 Customer Name <input type="text" name="Customer Name" placeholder="Customer Name" required><br><br>
                         Customer Contact No: <input type="text" name="contact no" placeholder="Contact No(11 or morecharacters)" pattern=".{11,}" title="Must contain at least 11" </br> </br>
                         Customer Email: <input type="text" name="email" placeholder="Email" style="border: 0px; width: 200px;" pattern="[^ @]*@[^ @]*.com" required><br> <br>
                         Account Name: <input type="text" name="Account Name" placeholder="Account Name" required> <br> <br>
                         Bank Name: <input type="text" name="Bank Name" placeholder="Bank Name" required><br><br>
                         Branch: <input type="text" name="Branch" placeholder="Branch" required><br><br>
                         Account No: <input type="text" name="Account no" placeholder="Contact No(10 or morecharacters)" pattern=".{10,}" title="Must contain at least 10" </br> </br> <br>
                         Password Pin: <input type="Password" name="password pin" placeholder="Password (6 or more characters)" pattern=".{6,}" title="Must contain at least 6 " </br> </br> <br>
                         
			<input type="submit" name="confirm" value="save & details">	<br>
		</div>
	</form>

</body>
</head>
</html>