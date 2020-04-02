<?php
include_once 'dbh.inc.php';
$username=$_POST['u'];
$pass=$_POST['p'];


//$sql="insert into users(userid,password,fname,lname,dob,street,city,state) values ('$username','$pass','$fname','$lname','$dob','$st','$ci','$stat');";


$sql="select userid,password from users where userid=$username and password=$pass;"; 
$result=mysqli_query($conn,$sql);

$row=mysql_fetch_array($result);
if($row['userid']==$username && $row['password']==$pass)
{
header("Location: ../Epic Estates.php?sign=success");
}
else
{
echo "Invalid Username/Password";
}