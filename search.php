<?php
$search=$_POST['search'];
$conn=mysql_connect("localhost","root","");
mysql_select_db("gencogeeks");
$q="select * from available_subjects where (available_subjects LIKE('%$search%') OR description LIKE('%$search%')) ";
$result=mysql_query($q,$conn);
if(mysql_num_rows($result)>=1)
{
while($row=mysql_fetch_assoc($result))
{
$n=$row['available_subjects'];
echo $n;
echo "<hr>";
}
}
?>