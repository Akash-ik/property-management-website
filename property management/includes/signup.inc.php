<?php
include_once 'dbh.inc.php';
$username=$_POST['u'];
$pass=$_POST['p'];
$fname=$_POST['fn'];
$lname=$_POST['ln'];
$dob=$_POST['dob'];
$st=$_POST['street'];
$ci=$_POST['city'];
$stat=$_POST['state'];
$ph1=$_POST['ph1'];
$ph2=$_POST['ph2'];
$id1=$_POST['id1'];
$id2=$_POST['id2'];

//$sql1="select userid from users where userid=username;";
//$result=mysqli_query($conn,$sql1);
//if(isnull($result))

$sql="insert into users(userid,password,fname,lname,dob,street,city,state) values ('$username','$pass','$fname','$lname','$dob','$st','$ci','$stat');";
mysqli_query($conn,$sql);

$sql="insert into phonenumber(userid,ph) values ('$username','$ph1');";
mysqli_query($conn,$sql);
$sql="insert into phonenumber(userid,ph) values ('$username','$ph2');";
mysqli_query($conn,$sql);

$sql="insert into email(userid,id) values ('$username','$id1');";
mysqli_query($conn,$sql);
$sql="insert into email(userid,id) values ('$username','$id2');";
mysqli_query($conn,$sql);
header("Location: ../index.php?sign=success");