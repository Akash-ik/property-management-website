<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<title>UPDATE</title>
<h1>EPIC ESTATES</h2>
<h2>UPDATE PAGE</h2>

<body>
<h3>Enter the following</h3>
	
	<center><form action ="includes/updatep.inc.php" method="POST">
	<input type="password" name="p" placeholder="Password" required>
	<br>
	<input type="text" name="fn" placeholder="First Name" required>
	<br>
	<input type="text" name="ln" placeholder="Last Name" required>
	<br>
	<input type="text" name="dob" placeholder="Date of Birth(yyyy-mm-dd)" required></center>
	<br>
	<center><h3>Enter the address:</h3>
	<input type="text" name="street" placeholder="Street" required>
	<br>
	<input type="text" name="city" placeholder="City" required>
	<br>
	<input type="text" name="state" placeholder="State" required>
	<br>
	<h3>Enter the Phone number</h3>
	<input type="text" name="ph1" placeholder="Phone number 1" required>
	<br>
	<input type="text" name="ph2" placeholder="Phone number 2" value="">
	<br>
	<h3>Enter the Email ID</h3>
	<input type="text" name="id1" placeholder="Email id 1" required>
	<br>
	<input type="text" name="id2" placeholder="Email id 2" value="">
	<br>
	<button type="logged" name="logged">Update</button> 
	<input type="reset" value="Reset"/></center
	</form>
</body>
</html>
