<?php
session_start();
$ans=$_POST['radio'];
echo $_SESSION['ques'];
echo "<br>".$ans; 
?>