<?php
include_once 'dbh.inc.php';
$username=$_POST['u'];
$pass=$_POST['p'];

$sql="insert into username_password (username,pass) values ('$username','$pass');";
mysqli_query($conn,$sql);

header("Location: ../index.php?sign=success");