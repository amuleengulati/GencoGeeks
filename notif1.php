<?php
include('connect.php');
session_start();
$email=$_POST['email'];
$msg=$_POST['msg'];
$query="insert into notif(email,message) values('$email','$msg')";
$result=mysql_query($query) or die(mysql_error());
echo "<script>alert('Your message has been sent.');window.location.href='notif.php';</script>";
?>