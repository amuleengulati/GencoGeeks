<html>
<head>
<?php
include('header.php');
?>
<script src="jquery.js"></script>
<script src="script.js"></script>
</head>
<body>
<div id="t">
<form method="post" action="subdb.php">
<h1>Add new subject</h1>
<table cellspacing="10">
<tr><td>Subject Name:</td><td> <input type="text" placeholder='Enter subject label' required name='label' id='label'></td></tr>
<tr><td>Description:</td><td> <textarea placeholder='Enter subject description' required name='description' id='description'></textarea></td></tr>
</table><br><br>
<input type="submit" value="ADD SUBJECT" id="submit" style="padding-left:40px"><br><br>
<input type="button" value="DONE" id="exit"></center>
</form>
</div>
</body>
</html>
