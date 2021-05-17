<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$t_id=$_POST['t_id'];
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$dp=$_FILES['dp']['name'];
$path="profilepics/".basename($_FILES["dp"]["name"]);
move_uploaded_file($_FILES['dp']['tmp_name'],$path);
$conn=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("gencogeeks");
$sql="select * from transaction_id where transaction_id='$t_id'";
$result=mysql_query($sql) or die(mysql_error());
if(mysql_num_rows($result)==0)
{
echo "<script>alert('Invalid transaction id. Kindly pay the fee in the Make Payment section to get a transaction id and then try again.');window.location.href='index.php';";
echo "</script>";
}
else
{
$query="select * from user_details where email='$email'";
$result=mysql_query($query) or die(mysql_error());
if(mysql_num_rows($result)==0)
{
$sql1="delete from transaction_id where transaction_id='$t_id'";
$result=mysql_query($sql1) or die(mysql_error());
$query1="insert into user_details(firstname,lastname,email,dob,username,password,dp,transaction_id) values('$fname','$lname','$email','$dob','$username','$pwd','$path','$t_id')";
$result1=mysql_query($query1) or die(mysql_error());
$sql1="delete from transaction_id where transaction_id='$t_id'";
$result=mysql_query($sql1) or die(mysql_error());
echo "<script>alert('Registration successful. Please login to continue.');window.location.href='index.php';";
echo "</script>";
}
else
{
echo "<script>alert('Sorry. You have already registered using this email.');window.location.href='index.php';";
echo "</script>";
}
}
?>