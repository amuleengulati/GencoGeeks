<?php
include('uheader.php');
session_start();
?>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery.js"></script>
<script src="script.js"></script>
</head>
<div class="v" style="position:absolute;top:300px;left:150px;height:auto;width:auto;border:1px solid">
<?php
include('connect.php');
$query="select * from saved_videos where email='".$_SESSION['email']."'";
$result=mysql_query($query);
$no=1;
echo "<table border='1'>";
echo "<th>S.no</th>";
echo "<th>Name</th>";
echo "<th>Subject</th>";
echo "<th>Description</th>";
echo "<th>Level</th>";
while($row=mysql_fetch_assoc($result))
{
$name=$row['name'];
$query1="select * from videos where name='$name'";
$result1=mysql_query($query1);
while($rows=mysql_fetch_assoc($result1))
{
echo "<tr>";
		echo "<td>$no</td><td><a href='save.php?name=".$rows['name']."'>abc</a><a href='".$rows['url']."' style='text-decoration:none;'>".$rows['name']."</a></td><td>".$rows['subject']."<td>".$rows['description']."</td><td>".$rows['level']."</td>";
		echo "</tr>";
		
		$no++;
}
echo "</table>";
}
?>
</div>