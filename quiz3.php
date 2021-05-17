<?php
session_start();
$sub=$_SESSION['sub'];
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
$sub=preg_replace('/\s+/', '', $_SESSION['sub']);
if(!isset($_SESSION['true_ans']))
{
$_SESSION['true_ans']=0;
}
if(isset($_POST['ans']))
{
$ans=$_POST['ans'];

}
else
{
$ans="";
}
if(isset($_GET['q']))
{
$question=$_GET['q'];
$query="select * from ".$sub." where question='$question'";
$result=mysql_query($query);
$row=mysql_fetch_assoc($result);
$cans=$row['cans'];
$qi=$row['id'];
$ans1=$row['ans1'];
$ans2=$row['ans2'];
$ans3=$row['ans3'];
$ans4=$row['ans4'];
if($ans==$cans)
{$_SESSION['true_ans']=$_SESSION['true_ans']+1;}

$query="insert into user_answers(question,ans1,ans2,ans3,ans4,true_ans,your_ans,que_id) values('$question','$ans1','$ans2','$ans3','$ans4','$cans','$ans',$qi)";
$result=mysql_query($query) or die(mysql_error());
}
echo "<form method='post' action='review.php'>";
echo "<table border='1'>";
echo "<tr><th>Total Questions</th><th>Right Answers</th><th>Wrong Answers</th></tr>";
$query="select * from user_answers";
$result=mysql_query($query);
echo "<tr>";
echo "<td>10</td>";
echo "<td>".$_SESSION['true_ans']."</td>";
$w= 10-$_SESSION['true_ans'];
echo "<td>$w</td>";
echo "<input type='submit' value='Review' id='submit' style='position:absolute;top:100px;left:500px;'>";
echo "</form>";
		
		?>
</div>
</body>
</html>