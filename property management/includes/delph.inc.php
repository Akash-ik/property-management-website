<?php
include_once 'dbh.inc.php';
SESSION_start();
$uid=$_SESSION['u'];
$ph1=$_POST['ph1'];


$sql="delete from phonenumber where userid='$uid' and ph='$ph1';";
mysqli_query($conn,$sql);

header("Location: ../Epic Estates.php?sign=success");