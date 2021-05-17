<?php
session_start();
include('connect.php');
$query="update notif set status='read' where email='".$_SESSION['email']."'";
$result=mysql_query($query) or die(mysql_error());
?>