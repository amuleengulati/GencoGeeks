<?php

$email=$_POST['email'];
$conn=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('gencogeeks');
$query="select available_subjects from available_subjects where available_subjects NOT IN (select enrolled_subjects from enrolled_subjects where email='$email')";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result)){
$n=$row['available_subjects'];
$n1=preg_replace('/\s+/', '', $n);
echo "<center><a href='#".$n1."'>".$n."</a><hr></center>";
}
?>