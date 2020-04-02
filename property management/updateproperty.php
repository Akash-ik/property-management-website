<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<title>UPDATE</title>
<h1>EPIC ESTATES</h2>
<h2>UPDATE PROPERTY DETAILS</h2>
<body>

	<form action="includes/updateproperty.inc.php" method="POST">
	<input type="text" name="pid" placeholder="Property ID"
>
	<input type="text" name="name" placeholder="Name of the property"
>
	<input type="text" name="cost" placeholder="Cost of property" >
	<input type="text" name="area" placeholder="Size of property" >

<p>Lending type:</p>
<input type="radio" name="ltype" id="ltype" value="sell"/>Sell
<input type="radio" name="ltype" id="ltype" value="rent"/>Rent


<h1>Furnishing:<h1>
<input type="radio" name="furnishing" id="furnishing" value="furnished"/>Furnished
<input type="radio" name="furnishing" id="furnishing" value="semi"/>Semi-Furnished
<input type="radio" name="furnishing" id="furnishing" value="un"/>Unfurnished

<p>Completion status:</p>
<input type="radio" name="cstat" id="cstat" value="done"/>Completed
<input type="radio" name="cstat" id="cstat" value="notdone"/>In progress

<p>Number of bed rooms:</p>
<input type="radio" name="rooms" id="rooms" value=1/>1-BHK
<input type="radio" name="rooms" id="rooms" value=2/>2-BHK
<input type="radio" name="rooms" id="rooms" value=3/>3-BHK
<input type="radio" name="rooms" id="rooms" value=4/>4-BHK
<input type="radio" name="rooms" id="rooms" value=5/>More than 4


<p>Floor:</p>
<input type="int" name="floor" id="floor" value=""/>

<p>Direction:</p>
<select name="Facing_direction">
	<option value="north">North</option> 
	<option value="south">South</option>
	<option value="east">East</option>
	<option value="west">West</option>		
<br>
	<input type="text" name="street" placeholder="Street">
<br>
	<input type="text" name="city" placeholder="City">
	<br>
	<input type="text" name="state" placeholder="State">
	<br>
<button type="logged" name="logged">Update</button> 
	<input type="reset" value="Reset"/></center
	</form>

</body>

</html>