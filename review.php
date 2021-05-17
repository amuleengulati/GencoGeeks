<?php
session_start();
$sub=$_SESSION['sub'];
$n1=preg_replace('/\s+/', '', $sub);
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
		<div id="d1"><a href="showvideos.php">Videos</a>
		</div>
		<div id="d2"><a href="quiz2.php" style="color:red">Tests</a>
		</div>
		<div id="d3"><a href="svideos.php">Saved Videos</a>
		</div>
		<div id="d4">
	<?php
	include('connect.php');
echo "<form method='post' action='".$n1.".php?s=".$sub."'>";
echo "<table border='1'>";
echo "<tr><th>S.no</th><th>Question</th><th>Correct Answer</th><th>Your answer</th></tr>";
$qno=1;
$query="select * from user_answers";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{
echo "<tr>";
echo "<td>$qno</td>";
echo "<td>".$row['question']."</td>";
echo "<td>".$row['true_ans']."</td>";
echo "<td>".$row['your_ans']."</td>";
echo "<input type='submit' value='Exit' id='submit' style='position:absolute;top:650px;left:500px'>";
echo "</form>";
$qno++;
}
	?>
		</div>

</body>
</html>