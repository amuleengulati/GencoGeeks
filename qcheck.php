<?php
session_start();
if(isset($_POST['ans'])){
$ans=$_POST['ans'];
var_dump($_SESSION);
}
else
$ans="";
include('connect.php');
$no=$_SESSION['no'];
$sub=preg_replace('/\s+/', '', $_SESSION['sub']);
$query="select * from ".$sub." order by rand() limit 1 ";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{
$no++;
echo "<form method='post' action='qcheck.php'>";
echo "<br> Que ".$no.": " .$row['question'];
echo "<br><input type='radio' name='ans' value='".$row['ans1']."'>".$row['ans1'];
echo "<br><input type='radio' name='ans' value='".$row['ans2']."'>".$row['ans2'];
echo "<br><input type='radio' name='ans' value='".$row['ans3']."'>".$row['ans3'];
echo "<br><input type='radio' name='ans' value='".$row['ans4']."'>".$row['ans4']."<hr>";

}
echo "<br><input type='submit' value='Get Result'>";
echo "</form>";

?>