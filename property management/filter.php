<html>
<head>
<title>
Sell
</title>
</head>
<link rel="stylesheet" type="text/css" href="css/filter.css">


<body>

<form name="frminsert" action="includes/filter.inc.php" method="post">
<h1>Enter the details:<h1>

<p>Lending type:</p>
<input type="radio" name="ltype" id="ltype" value="sell"/>Sell
<input type="radio" name="ltype" id="ltype" value="rent"/>Rent

<p>Minimum Area of property(SqM):</p>
<input type="text" name="areamin" id="areamin"/>

<p>Maximum Area of property(SqM):</p>
<input type="text" name="areamax" id="areamax"/>

<p>Furnishing:<p>
<input type="radio" name="ftype" id="ftype" value="furnished"/>Furnished
<input type="radio" name="ftype" id="ftype" value="semi"/>Semi-Furnished
<input type="radio" name="ftype" id="ftype" value="un"/>Unfurnished

<p>Completion status:</p>
<input type="radio" name="cstat" id="cstat" value="done"/>Completed
<input type="radio" name="cstat" id="cstat" value="notdone"/>In progress		

<p>Minimum Cost of property</p>
<input type="text" name="comin" id="comin"/>

<p>Maximum Cost of property</p>
<input type="text" name="comax" id="comax"/>

<p>Number of bed rooms:</p>
<input type="radio" name="br" id="br" value=1/>1-BHK
<input type="radio" name="br" id="br" value=2/>2-BHK
<input type="radio" name="br" id="br" value=3/>3-BHK
<input type="radio" name="br" id="br" value=4/>4-BHK
<input type="radio" name="br" id="br" value=5/>More than 4

<p>Floor:</p>
<input type="int" name="flr" id="flr" value=""/>

<p>Direction:</p>
<select name="dir">
	<option value="north">North</option> 
	<option value="south">South</option>
	<option value="east">East</option>
	<option value="west">West</option>
</select>
<br/><br/><br/>


<input type="submit"/>
</form>
</body>
</html>