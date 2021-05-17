<?php
session_start();
error_reporting(0);
?>
<?php
if(!isset($_SESSION['username']))
{ 
echo "<script>window.location.href='login.php';";
echo "</script>";
}
else
{
include('uheader.php');
}
?>