<?php
include('connect.php');
session_start();
$name=$_GET['name'];
$query="delete from saved_videos where email='".$_SESSION['email']."' and name='$name'";
$result=mysql_query($query) or die(mysql_error());
echo "<script>alert('Video deleted successfully.');window.location.href='svideos.php';";
echo "</script>";
?>