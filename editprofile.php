<?php
session_start();
$conn=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('gencogeeks');
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$dp=$_FILES['dp']['name'];
$path="profilepics/".basename($_FILES["dp"]["name"]);
move_uploaded_file($_FILES['dp']['tmp_name'],$path);
$email=$_SESSION['email'];
if(isset($_FILES['dp']['name']) && !empty($_FILES['dp']['name']))
{
$query="update user_details set username='$username' , password='$pwd' , dp='$path' where (email='$email')";
$result=mysql_query($query) or die(mysql_error());
echo "<script>alert('Your changes have bee saved.');window.location.href='userlogin.php';";
echo "</script>";
}
else
{
$query1="select * from user_details where username='$username'";
$result1=mysql_query($query1);
if(mysql_num_rows($result1)==1)
{
echo "<script>alert('This username already exists.<br>Please select a different username and try agaian. ');window.location.href='userlogin.php';";
echo "</script>";
}
else
{
$query="update user_details set username='$username' , password='$pwd' where (email='$email')";
$result=mysql_query($query);
echo "<script>alert('Your changes have bee saved.');window.location.href='userlogin.php';";
echo "</script>";
}
}
?>