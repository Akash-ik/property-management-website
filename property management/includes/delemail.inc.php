<?php
include_once 'dbh.inc.php';
SESSION_start();
$uid=$_SESSION['u'];
$id1=$_POST['id1'];


$sql="delete from email where userid='$uid' and id='$id1';";
mysqli_query($conn,$sql);

header("Location: ../Epic Estates.php?sign=success");