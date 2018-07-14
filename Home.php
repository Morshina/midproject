<?php
	session_start();

	if(!empty($_SESSION['abc']))
	{
       
		$myfile = fopen("user.txt", 'r');
		$data = fread($myfile, filesize("user.txt"));
		$arr = explode("|", $data);
		fclose($myfile);

	}else{
			header("location: login.php");

	}
	
?>






<body>
	
	<table align="center" border="1" width="1000" height="550"  cellpadding="10" cellspacing="0" >
		
		<tr>
			<td height="30" align="center"><h2>Welcome to Travel & Tourism</h2></td>
		</tr>
		<tr>
			<td height="20">
				
				<a href="ViewingPackage.php">View Package</a>&nbsp &nbsp &nbsp  
				<a href="SelectingPackage.php">Select Package</a> &nbsp &nbsp &nbsp
				<a href="DestinationPlace.php">Destination</a> &nbsp &nbsp &nbsp
				<a href="Payment.php">Payment</a> &nbsp &nbsp &nbsp
				<a href="Feedback.php">Feedback</a>
				
			</td>			
		</tr >

<td> <img src="travel-tourism.jpg" width="100%px" height="100%px" /> </td>	
		
		<tr>
				
			<td align="top">
				
				
			</td>
				
												
		</tr>
		
		<tr height="5">
			<td  valign="top" colspan="2"><center>Copyright 2018</center></td>
		</tr>	
	</table>
</body>