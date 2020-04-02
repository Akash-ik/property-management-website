<body background="bg3.jpg">
<?php
include_once 'includes/dbh.inc.php';
$sql="select * from properties where ltype in ('sell','rent');";
$sql1=mysqli_query($conn,$sql);
while($data = mysqli_fetch_array($sql1))
{
echo "Property id:".$data['pid']."<br/>
Name of the property:".$data['name']."<br/>
Owner:".$data['userid']."<br/>
Cost of the property:".$data['cost']."<br/>
Size of the property:".$data['area']."<br/>
Construction status of the property:".$data['cstat']."<br/>
Number of rooms:".$data['rooms']."<br/>
Number of floors:".$data['floor']."<br/>
Facing direction:".$data['facing_direction']."<br/>
Lending type:".$data['ltype']."<br/>
Furnishing:".$data['furnishing']."<br/>
Address:".$data['street']." ".$data['city']." ".$data['state']."<br/><br/><br/>";
}
?>
</body>
