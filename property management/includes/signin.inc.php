<?php
session_unset();
include_once 'dbh.inc.php';
$username=$_POST['u'];
$pass=$_POST['p'];

$username=stripcslashes($username);

$sql="select userid,password from users where userid='$username' and password='$pass';"; 
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);
if($row['userid']==$username and $row['password']==$pass)
{
session_start();
$_SESSION['u']=$username;


header("Location: ../Epic Estates.php?sign=success");
}
else
{
echo "Invalid Username/Password";
}

