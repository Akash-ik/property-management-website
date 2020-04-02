<?php
include_once 'dbh.inc.php';
SESSION_start();
$uid=$_SESSION['u'];
$ph1=$_POST['ph1'];
$ph2=$_POST['ph2'];

$sql="update phonenumber set ph='$ph2' where userid='$uid' and ph='$ph1';";
mysqli_query($conn,$sql);

header("Location: ../Epic Estates.php?sign=success");