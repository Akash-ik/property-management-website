<html>
<head>
</head>
<body>
	<form action ="includes/signup.inc.php" method="POST">
	<input type="text" name="u" placeholder="Username" required> 
	<br>
	<input type="password" name="p" placeholder="Password" required>
	<br>
	<input type="text" name="fn" placeholder="First Name" required>
	<br>
	<input type="text" name="ln" placeholder="Last Name" required>
	<br>
	<input type="text" name="dob" placeholder="Date of Birth(yyyy-mm-dd)" required>
	<br>
	<p>Enter the address:</p>
	<input type="text" name="street" placeholder="Street" required>
	<br>
	<input type="text" name="city" placeholder="City" required>
	<br>
	<input type="text" name="state" placeholder="State" required>
	<br>
	<p>Enter the Phone number</p>
	<input type="text" name="ph1" placeholder="Phone number 1" maxlength="10" required>
	<br>
	<input type="text" name="ph2" placeholder="Phone number 2" maxlength="10" value="">
	<br>
	<p>Enter the Email ID</p>
	<input type="text" name="id1" placeholder="Email id 1" required>
	<br>
	<input type="text" name="id2" placeholder="Email id 2" value="">
	<br>
	<button type="logged" name="logged">Sign up</button> 
	<input type="reset" value="Reset"/>
	</form>

</body>
</html>