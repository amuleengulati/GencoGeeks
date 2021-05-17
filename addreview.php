<?php
include('connect.php');
$email=$_POST['email'];
$review=$_POST['review'];
$query1="select * from reviews where email='$email'";
$result1=mysql_query($query1) or die(mysql_error());
if(mysql_num_rows($result1)>=1)
{
echo "<script>alert('You have already reviewed using this email');window.location.href='review1.php';";
echo "</script>";
}
else
{
$query="insert into reviews(email,review) values('$email','$review')";
$result=mysql_query($query) or die(mysql_error());
echo "<script>alert('Your review has been successfully added');window.location.href='review1.php';";
echo "</script>";
if(!$result)
{
echo "<script>alert('There was a problem adding your review.<br>Try again later.');window.location.href='review1.php';";
echo "</script>";
}
}

?>