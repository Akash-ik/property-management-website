<?php
include_once 'dbh.inc.php';
SESSION_start();
$uid=$_SESSION['u'];
$id1=$_POST['id1'];
$id2=$_POST['id2'];

$sql="update email set id='$id2' where userid='$uid' and id='$id1';";
mysqli_query($conn,$sql);

header("Location: ../Epic Estates.php?sign=success");