<?php
include('connect.php');
session_start();
$name=$_GET['name'];
$query="select * from saved_videos where email='".$_SESSION['email']."' AND name='$name'";
$result=mysql_query($query);
if(mysql_num_rows($result)==0)
{
$query="insert into saved_videos(email,name) values('".$_SESSION['email']."','$name')";
$result=mysql_query($query);
echo "<script>alert('Video saved successfully.');window.location.href='showvideos.php';";
echo "</script>";
}
else
{
echo "<script>alert('You have already saved this video.');window.location.href='showvideos.php';";
echo "</script>";
}
?>