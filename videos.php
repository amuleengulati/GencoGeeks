<?php
include('header.php');
?>
<html>
<head>
<script src="jquery.js"></script>
<script src="script.js"></script>
</head>
<body>
<div id="t">
<form method="POST" action="addvideo.php" enctype="multipart/form-data">
<br><br>
<table cellspacing="10">
<tr><td>SUBJECT:</td><td> <select required name='sub' id='sub'><option value="cloudcomputing">Cloud Computing</option>
<option value="databases">Databases</option>
<option value="data analytics">Data Analytics</option>
<option value="business intelligence">Business Intelligence</option>
<option value="big data">Big Data</option>
<option value="web development">Web Development</option>
</select></td></tr>
<tr><td>UPLOAD VIDEO FILE:</td><td> <input type="file" name='vid' id='video' required></td></tr>
<tr><td>DESCRIPTION:</td><td> <textarea required name='des' id='des'></textarea></td></tr>
<tr><td>LEVEL:</td><td> <select required name='level' id='level'>
<option value="beginner">Beginner</option>
<option value="intermediate">Intermediate</option>
<option value="expert">Expert</option>
</select></td></tr>
</table><br><br>
<input type="submit" value="ADD VIDEO" id="submit" style="padding-left:40px"><br><br>
<input type="button" value="FINISH" id="exit"></center>
</form>
</div>
</body>
</html>