<body background="bg3.jpg">
<?php
session_start();
include_once 'dbh.inc.php';
$costmax=$_POST['comax'];
$costmin=$_POST['comin'];
$ftype=$_POST['ftype'];
$ltype=$_POST['ltype'];
$areamax=$_POST['areamax'];
$areamin=$_POST['areamin'];
$cstat=$_POST['cstat'];
$rooms=$_POST['br'];
$floor=$_POST['flr'];
$direction=$_POST['dir'];
$uid=$_SESSION['u'];
$sql="select pid,name,userid,cost,area,cstat,rooms,floor,facing_direction,ltype,furnishing,street,city,state from properties where (cost between '$costmin' and '$costmax')  and (area between '$areamin' and '$areamax')and cstat='$cstat' and rooms='$rooms' and floor='$floor' and facing_direction='$direction' and ltype='$ltype' and furnishing='$ftype';";
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
echo "<form action=\"confirm.php\" method=\"get\">";
echo "<input type=\"submit\" value=\"Buy\">";
echo "</form>";
echo "<form action=\"sinfo.php\" method=\"get\">";
echo "<input type=\"submit\" value=\"Seller Info\">";
echo "</form>";
echo '<br></br>';
}
?>
</body>