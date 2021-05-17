<?php
include('connect.php');
session_start();
?>
<!doctype html>
<html>
<head><link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery.js"></script>
<script src="script.js"></script></head>
<body>
<div id="cloudcomputing">
	<div id="frame">
	<center><h1 id="heading" style="text-transform:uppercase"><?php echo $_SESSION['sub'] ?></h1></center>
	</div>
		<div id="d1"><a href="showvideos.php">Videos</a>
		</div>
		<div id="d2"><a href="quiz4.php">Tests</a>
		</div>
		<div id="d3"><a href="svideos.php" style="color:red">Saved Videos</a>
		</div>
		<div id="d4">
		<?php
		echo "<table border='1'>";
		echo "<tr>";
		echo "<th>S.no</th><th>Video</th><th>Video Description</th><th>Difficulty Level</th>";
		echo "</tr>";
		$no=1;
		$query1="select * from saved_videos where email='".$_SESSION['email']."'";
		$result1=mysql_query($query1) or die(mysql_error());
		while($row=mysql_fetch_assoc($result1))
		{
		$name=$row['name'];
		$query2="select * from videos where name='$name'";
		$result2=mysql_query($query2) or die(mysql_error());
		while($row1=mysql_fetch_assoc($result2))
		{
		echo "<tr>";
		echo "<td>$no</td><td><a href='deletev.php?name=".$row1['name']."' style='float:right;color:white;text-decoration:none;'>Delete?</a><a href='".$row1['url']."' style='text-decoration:none;color:white;'>".$row1['name']."</a></td><td>".$row1['description']."</td><td>".$row1['level']."</td>";
		echo "</tr>";
		$no++;
		}
		}
		echo "</table>";
		?>
		</div>
</div>
</body>
</html>