<?php
session_start();
include_once 'dbh.inc.php';
$cpid=$_POST['cpid'];
$uid=$_SESSION['u'];

$sql="update properties set ltype='$uid' where pid='$cpid';";
mysqli_query($conn,$sql);

header("Location: ../Epic Estates.php?buy=success");