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
<form method="post" action="formdb.php">
<br><br>
<table cellspacing="10">
<tr><td>TEST LABEL:</td><td> <select required name='label' id='label'><option value="cloudcomputing">Cloud Computing</option>
<option value="databases">Databases</option>
<option value="dataanalytics">Data Analytics</option>
<option value="businessintelligence">Business Intelligence</option>
<option value="bigdata">Big Data</option>
<option value="webdevelopment">Web Development</option>
</select></td></tr>
<tr><td>QUESTION:</td><td> <input type="text" placeholder='Enter question here' required name='question' id='question'></td></tr>
<tr><td>CORRECT ANSWER:</td><td> <input type="text" placeholder='Enter correct answer' required name='cans' id='cans'></td></tr>
<tr><td>OPTION1:</td><td> <input type="text" placeholder='Enter first option here' required name='wans1' id='wans1'></td></tr>
<tr><td>OPTION2:</td><td> <input type="text" placeholder='Enter second option here' required name='wans2' id='wans2'></td></tr>
<tr><td>OPTION3:</td><td> <input type="text" placeholder='Enter third option here' required name='wans3' id='wans3'></td></tr>
<tr><td>OPTION4:</td><td> <input type="text" placeholder='Enter fourth option here' required name='wans4' id='wans4'></td></tr>
</table><br><br>
<input type="submit" value="ADD QUESTION" id="submit" style="padding-left:40px"><br><br>
<input type="button" value="FINISH" id="exit"></center>
</form>
</div>
</body>
</html>
