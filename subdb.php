<?php
$conn=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('gencogeeks');
$label=$_POST['label'];
$desc=$_POST['description'];
$query1="insert into available_subjects (available_subjects,description) values('label','$desc')";
$result1=mysql_query($query1) or die(mysql_error());
header('location:addsub.php');
?>