<?php
include_once 'dbh.inc.php';

SESSION_start();
$uid=$_SESSION['u'];

$pid=$_POST['pid'];
$name=$_POST['name'];
$cost=$_POST['cost'];
$area=$_POST['area'];
$cstat=$_POST['cstat'];
$rooms=$_POST['rooms'];
$floor=$_POST['floor'];
$fd=$_POST['Facing_direction'];
$ltype=$_POST['ltype'];
$fur=$_POST['furnishing'];
$steet=$_POST['street'];
$city=$_POST['city'];
$state=$_POST['state'];

if("$name"!= NULL)
{
$sql="update properties set name='$name' where userid='$uid' and pid='$pid';";
mysqli_query($conn,$sql);
}
if("$cost"!= NULL)
{
$sql="update properties set cost='$cost' where userid='$uid' and pid='$pid';";
mysqli_query($conn,$sql);
}
if("$area"!= NULL)
{
$sql="update properties set area='$area' where userid='$uid' and pid='$pid';";
mysqli_query($conn,$sql);
}
if("$cstat"!= NULL)
{
$sql="update properties set cstat='$cstat' where userid='$uid' and pid='$pid';";
mysqli_query($conn,$sql);
}

if("$rooms"!= NULL)
{
$sql="update properties set rooms='$rooms' where userid='$uid' and pid='$pid';";
mysqli_query($conn,$sql);
}

if("$floor"!= NULL)
{
$sql="update properties set floor='$floor' where userid='$uid' and pid='$pid';";
mysqli_query($conn,$sql);
}
if("$fd"!= NULL)
{
$sql="update properties set facing_direction='$fd' where userid='$uid' and pid='$pid';";
mysqli_query($conn,$sql);
}

if("$ltype"!= NULL)
{
$sql="update properties set ltype='$ltype' where userid='$uid' and pid='$pid';";
mysqli_query($conn,$sql);
}
if("$fur"!= NULL)
{
$sql="update properties set furnishing='$fur' where userid='$uid' and pid='$pid';";
mysqli_query($conn,$sql);
}
if("$steet"!= NULL)
{
$sql="update properties set street='$steet' where userid='$uid' and pid='$pid';";
mysqli_query($conn,$sql);
}
if("$city"!= NULL)
{
$sql="update properties set city='$city' where userid='$uid' and pid='$pid';";
mysqli_query($conn,$sql);
}
if("$state"!= NULL)
{
$sql="update properties set state='$state' where userid='$uid' and pid='$pid';";
mysqli_query($conn,$sql);
}

header("Location: ../Epic estates.php?sign=success");