<?php
include_once 'dbh.inc.php';
$cpid=$_POST['cpid'];
$sql="select u.userid,u.fname,u.lname,u.street,u.city,u.state from properties p ,users u where p.pid=$cpid and p.userid=u.userid;";
$sql1=mysqli_query($conn,$sql);
while($data = mysqli_fetch_array($sql1))
{
echo " User Id:".$data['userid']."<br/>
First Name:".$data['fname']."<br/>
Last Name:".$data['lname']."<br/>
Address:<br/>".$data['street']."<br/>
".$data['city']."<br/>
".$data['state']."<br/>";
}
$sql="select e.id from properties p ,email e where p.pid=$cpid and p.userid=e.userid;";
$sql1=mysqli_query($conn,$sql);


while($data = mysqli_fetch_array($sql1))
{
echo " Email Id:".$data['id']."<br/>";

}
$sql="select e.ph from properties p ,phonenumber e where p.pid=$cpid and p.userid=e.userid;";
$sql1=mysqli_query($conn,$sql);


while($data = mysqli_fetch_array($sql1))
{
echo " Phone No:".$data['ph']."<br/>";

}
?>