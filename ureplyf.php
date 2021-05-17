<?php
include('uheader.php');
include('connect.php');
$id=$_GET['id'];
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div id="t">
<form action="ureply.php?id='<?php echo $id ?>'" method="post">
<br><br>
<p>Enter your answer:</p><textarea name="reply-content" rows="10" cols="30" required></textarea><br><br>
<input type="submit" value="Add Reply" id="submit">	
</form>
</div>
</html>