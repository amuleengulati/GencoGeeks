<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
include "connect.php"; 
    $username = $_POST['username'];
	$email=$_POST['email'];
    $query="select * from user_details where username='$username'";
    $result   = mysql_query($query);
    $count=mysql_num_rows($result);
    if($count==1)
    {
        $row=mysql_fetch_array($result);
        $pass  =  $row['password'];
        $to = $row['email'];
        $from = "GencoGeeks";
        $url = "http://www.gencogeeks.com/";
        $body  =  "GencoGeeks password recovery Script
        -----------------------------------------------
        Url : $url;
        email Details is : $to;
        Here is your password  : $pass;
        Sincerely,
        GencoGeeks";
        $from = "gencogeeks@gmail.com";
        $subject = "GencoGeeks Password recovered";
        $headers1 = "From: $from\n";
        $headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
        $headers1 .= "X-Priority: 1\r\n";
        $headers1 .= "X-MSMail-Priority: High\r\n";
        $headers1 .= "X-Mailer: Just My Server\r\n";
		if($email==$to)
		{
        $sentmail = mail ( $to, $subject, $body, $headers1 );
		}
		else
		{
		echo "<script>alert('Entered email doesnot match registered email.');window.location.href='login.php';";
echo "</script>";
		}
    } else {
    if ($count==0) {
    echo "<script>alert('Username doesnot exist.');window.location.href='login.php';";
echo "</script>";
        }
        }
    
    if($sentmail==1)
    {
         echo "<script>alert('Your password has been sent to your email address.');window.location.href='login.php';";
echo "</script>";
    }
        else
        {
         echo "<script>alert('Error sending email.Try again later.');window.location.href='login.php';";
echo "</script>";
    }

?>

