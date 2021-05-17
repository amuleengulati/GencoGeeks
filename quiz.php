<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tests</title>
	<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>
<div style="position:absolute;top:0px;left:0px;height:100%;width:100%;">

	<div style="position:absolute;left:350px;top:150px;height:300px;width:600px;
	            border:1px solid black;background-color:white;">
<?php
$sub=preg_replace('/\s+/', '', $_SESSION['sub']);
$_SESSION['no']=1;
$no=$_SESSION['no'];
$_SESSION['true_ans']=0;
$sql="delete from user_answers";
$result=mysql_query($sql)or die(mysql_error());
$query="select * from ".$sub." order by rand() limit 1 ";
$result=mysql_query($query) or die(mysql_error());
while($row=mysql_fetch_assoc($result))
{
echo "<form method='post' action='quiz1.php?q=".$row['question']."'>";
echo "<br><div style='margin-left:50px;text-transform:uppercase;'> Que:".$no. " "  .$row['question'];
echo "<table>";
echo "<tr>";
echo "<td width='180px'><input type='radio' name='ans' value='".$row['ans1']."'>".$row['ans1']."</td>";
echo "<td><input type='radio' name='ans' value='".$row['ans2']."'>".$row['ans2']."</td></tr>";
echo "<tr>";
echo "<td><input type='radio' name='ans' value='".$row['ans3']."'>".$row['ans3']."</td>";
echo "<td><input type='radio' name='ans' value='".$row['ans4']."'>".$row['ans4']."</td></tr>";

echo "</table>";
}
echo "<br><br><br>
<input type='submit' value='Next' style='background-color:white;color:green;width:70px;
height:40px;margin-left:100px;'>";
echo "</form>";
?>
	</div>
</div>
</body>
</html>