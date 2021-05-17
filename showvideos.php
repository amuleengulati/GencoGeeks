<?php
session_start();
$s=$_SESSION['sub'];
$sub=preg_replace('/\s+/', '', $s);
?>
<!doctype html>
<html>
<head><link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery.js"></script>
<script src="script.js"></script></head>
<body>
<div id="cloudcomputing">
	<div id="frame">
	<center><h1 id="heading" style="text-transform:uppercase"><?php echo $sub ?></h1></center>
	</div>
		<div id="d1"><a href="showvideos.php" style="color:red">Videos</a>
		</div>
		<div id="d2"><a href="quiz4.php">Tests</a>
		</div>
		<div id="d3"><a href="svideos.php">Saved Videos</a>
		</div>
		<div id="d4">
		<?php
		include('connect.php');
		$query="select * from videos where subject='".$sub."'";
		$result=mysql_query($query);
		$no=1;
		if(mysql_num_rows($result)>0)
		{
		echo "<table border='1'>";
		echo "<tr>";
		echo "<th>S.no</th><th>Video</th><th>Video Description</th><th>Difficulty Level</th>";
		echo "</tr>";
		while($row=mysql_fetch_assoc($result))
		{
		echo "<tr>";
		echo "<td>$no</td><td><a href='save.php?name=".$row['name']."' style='float:right;text-decoration:none;color:red;'>Save?</a><a href='".$row['url']."' style='text-decoration:none;color:white;'>".$row['name']."</a></td><td>".$row['description']."</td><td>".$row['level']."</td>";
		echo "</tr>";
		
		$no++;
		}
		echo "</table>";
		}
		else
		{
		echo "No videos are available for this subject yet.";
		}
		?>
		</div>
</div>
</body>
</html>