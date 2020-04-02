<?php
session_start();
include_once 'dbh.inc.php';
$pname=$_POST['pname'];
$cost=$_POST['co'];
$ftype=$_POST['ftype'];
$ltype=$_POST['ltype'];
$cstat=$_POST['cstat'];
$rooms=$_POST['br'];
$floor=$_POST['flr'];
$direction=$_POST['dir'];
$street=$_POST['st'];
$city=$_POST['city'];
$state=$_POST['state'];
$area=$_POST['area'];
$uid=$_SESSION['u'];
$sql="insert into properties (name,userid,cost,area,cstat,rooms,floor,facing_direction,ltype,furnishing,street,city,state) values ('$pname','$uid','$cost','$area','$cstat','$rooms','$floor','$direction','$ltype','$ftype','$street','$city','$state');";
mysqli_query($conn,$sql);	
header("Location: ../epic estates.php?add=success");