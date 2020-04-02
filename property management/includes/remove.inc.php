<?php
SESSION_start();
include_once 'dbh.inc.php';
$pid=$_POST['pid'];
$uid=$_SESSION['u'];

$sql="delete from properties where pid='$pid' and userid='$uid';";
mysqli_query($conn,$sql);

header("Location: ../Epic Estates.php?sign=success");