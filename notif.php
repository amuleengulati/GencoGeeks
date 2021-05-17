<?php
include('header.php');
include('connect.php');
session_start();
?>
<html>
<head>
<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>
<div class="notif" style="position:absolute;top:350px;left:350px;height:300px;width:600px;">
<form method="post" action="notif1.php">
<center><h1>ENTER THE FOLLOWING DETAILS</h1><br><br>
Email: <input type='text' name='email' required><br><br>
Message: <textarea name='msg' id='msg' required> </textarea>
<br><br>
<input type='submit' value='SEND NOTIFICATION' id='submit'></center>
</form>
</div>
</body>
</html>
