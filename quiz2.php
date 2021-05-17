<?php
session_start();
$sub=$_SESSION['sub'];
?>
<?php
$dateFormat = "d F Y -- g:i a";
$targetDate = time() + (10*60);
$_SESSION['td']=$targetDate;
$actualDate = time();
$secondsDiff = $targetDate - $actualDate;
$remainingDay     = floor($secondsDiff/60/60/24);
$remainingHour    = floor(($secondsDiff-($remainingDay*60*60*24))/60/60);
$remainingMinutes = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))/60);
$remainingMinutes = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))/60);
$remainingSeconds = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))-($remainingMinutes*60));
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery.js"></script>
<script src="script.js"></script>
<script type="text/javascript">
  var minutes = <?php echo $remainingMinutes; ?>  
  var seconds = <?php echo $remainingSeconds; ?> 
	function setCountDown()
	{
	seconds--;
	if (seconds < 0)
	{
      minutes--;
      seconds = 59
	}
  if (minutes < 0)
  {
      hours--;
      minutes = 59
  }
  document.getElementById("remain").innerHTML = "00: 0"+minutes+" : "+seconds+"";
  SD=window.setTimeout( "setCountDown()", 1000 );
  if (minutes == '00' && seconds == '00') 
  { seconds = "00"; window.clearTimeout(SD);
  		window.location = "quiz3.php"; 
  } 

  }
</script>
</head>
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
		<div style="position:absolute;top:0px;left:0px;height:100%;width:100%;">
			<div style="position:absolute;left:350px;top:100px;height:auto;width:600px;color:white;border:10px solid white">
		     <?php
				include('connect.php');
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
				echo "<br><div style='margin-left:50px;'> Que:".$no. " "  .$row['question']."<br>";
				echo "<input type='radio' name='ans' value='".$row['ans1']."'>".$row['ans1']."<br>";
				echo "<input type='radio' name='ans' value='".$row['ans2']."'>".$row['ans2']."<br>";
				echo "<input type='radio' name='ans' value='".$row['ans3']."'>".$row['ans3']."<br>";
				echo "<input type='radio' name='ans' value='".$row['ans4']."'>".$row['ans4']."<br>";
				}
				echo "<br><br><br>
				<input type='submit' value='NEXT' style='background-color:white;color:blue;width:70px;
				height:40px;margin-left:200px;'>";
				echo "</form>";
				?>
			</div>
		</div>
</div>
<body onload="setCountDown()">
	<div id="remain" style="position:absolute;top:50px;left:830px;height:50px;width:300px;color:white;font-weight:bold;font-size:150%;">
		<?php echo " $remainingMinutes : $remainingSeconds ";?>
	</div>
</body>
</body>
</html>