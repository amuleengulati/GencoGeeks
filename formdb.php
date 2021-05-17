<?php
$conn=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('gencogeeks');
$label=$_POST['label'];
$ques=$_POST['question'];
$cans=$_POST['cans'];
$wans1=$_POST['wans1'];
$wans2=$_POST['wans2'];
$wans3=$_POST['wans3'];
$wans4=$_POST['wans4'];
$query="Show tables like '".$label."'";
$result=mysql_query($query);
if(mysql_num_rows($result)>0)
{
$query1="insert into ".$label." (question,cans,ans1,ans2,ans3,ans4) values('$ques','$cans','$wans1','$wans2','$wans3','$wans4')";
$result1=mysql_query($query1) or die(mysql_error());
header('location:form.php');
}
else
{
$query="Create table ".$label." (id INT(255) AUTO_INCREMENT PRIMARY KEY,
 question VARCHAR(1000) NOT NULL,
 cans VARCHAR(1000) NOT NULL,
 ans1 VARCHAR(1000) NOT NULL,
 ans2 VARCHAR(1000) NOT NULL,
 ans3 VARCHAR(1000) NOT NULL,
 ans4 VARCHAR(1000) NOT NULL)";
$result=mysql_query($query) or die(mysql_error());
$query2="insert into ".$label." (question,cans,ans1,ans2,ans3,ans4) values('$ques','$cans','$wans1','$wans2','$wans3','$wans4')";

$result2=mysql_query($query2) or die(mysql_error());
header('location:form.php');
}
?>