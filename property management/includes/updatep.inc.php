<?php
include_once 'dbh.inc.php';
SESSION_start();
$uid=$_SESSION['u'];
$pass=$_POST['p'];
$fname=$_POST['fn'];
$lname=$_POST['ln'];
$dob=$_POST['dob'];
$st=$_POST['street'];
$ci=$_POST['city'];
$stat=$_POST['state'];

if("$pass"!= NULL)
{
$sql="update users set password='$pass' where userid='$uid';";
mysqli_query($conn,$sql);
}
if("$fname"!= NULL)
{
$sql="update users set fname='$fname' where userid='$uid';";
mysqli_query($conn,$sql);
}
if("$lname"!= NULL)
{
$sql="update users set lname='$lname' where userid='$uid';";
mysqli_query($conn,$sql);
}
if("$dob"!= NULL)
{
$sql="update users set dob='$dob' where userid='$uid';";
mysqli_query($conn,$sql);
}
if("$st"!= NULL)
{
$sql="update users set street='$st' where userid='$uid';";
mysqli_query($conn,$sql);
}
if("$ci"!= NULL)
{
$sql="update users set city='$ci' where userid='$uid';";
mysqli_query($conn,$sql);
}
if("$stat"!= NULL)
{
$sql="update users set state='$stat' where userid='$uid';";
mysqli_query($conn,$sql);
}


header("Location: ../index.php?sign=success");