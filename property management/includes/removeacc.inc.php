<?php
SESSION_start();
include_once 'dbh.inc.php';
$uid=$_SESSION['u'];

$sql="delete from users where userid='$uid';";
mysqli_query($conn,$sql);

header("Location: ../index.php?sign=success");