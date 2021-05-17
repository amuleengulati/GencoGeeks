<?php
session_start();
$sub=$_GET['s'];
$_SESSION['sub']=$sub;
?>
<!doctype html>
<html>
<head><link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery.js"></script>
<script src="script.js"></script></head>
<body>
<div id="cloudcomputing">
<div id="frame">
<center><h1 id="heading">DATA ANALYTICS</h1></center></div>
<div id="d1"><a href="showvideos.php">Videos</a></div>
<div id="d2"><a href="quiz4.php">Tests</a></div>
<div id="d3"><a href="svideos.php">Saved Videos</a></div>
<div id="d4">
<p style="padding:10px">
<img src="data_analytics.png" alt="cloud computing" height="300" width="300" align="right">
Analysis of data is a process of inspecting, cleaning, transforming, and modeling data with the goal of discovering useful information, suggesting conclusions, and supporting decision-making. Data analysis has multiple facets and approaches, encompassing diverse techniques under a variety of names, in different business, science, and social science domains.<br><br>

Data mining is a particular data analysis technique that focuses on modeling and knowledge discovery for predictive rather than purely descriptive purposes. Business intelligence covers data analysis that relies heavily on aggregation, focusing on business information. In statistical applications, some people divide data analysis into descriptive statistics, exploratory data analysis (EDA), and confirmatory data analysis (CDA). EDA focuses on discovering new features in the data and CDA on confirming or falsifying existing hypotheses. Predictive analytics focuses on application of statistical models for predictive forecasting or classification, while text analytics applies statistical, linguistic, and structural techniques to extract and classify information from textual sources, a species of unstructured data. All are varieties of data analysis.
<br><br>
Data integration is a precursor to data analysis, and data analysis is closely linked to data visualization and data dissemination. The term data analysis is sometimes used as a synonym for data modeling.
</p>
</div>
</div>
<div id="videos">
<div id="frame">
<center><h1 id="heading">CLOUD COMPUTING</h1></center></div>
<div id="d1" style="color:black">Videos</div>
<div id="d2"><a href="#test">Tests</a></div>
<div id="d3"><a href="#svideos">Saved Videos</a></div>
<div id="d5">
<div id="v1">
<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('gencogeeks');
$query="select * from videos where descr='cloud computing' ORDER BY id DESC LIMIT 0,10";
$result=mysql_query($query) or die(mysql_error());
while($row=mysql_fetch_assoc($result))
{
echo $row['videos']."<br>";
}
if(mysql_num_rows($result)==0)
{
echo "No more results to display.";
}
?>
</div>
<div id="v2">
<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('gencogeeks');
$query="select * from videos where descr='cloud computing' ORDER BY id DESC LIMIT 10,20";
$result=mysql_query($query) or die(mysql_error());
while($row=mysql_fetch_assoc($result))
{
echo $row['videos']."<br>";
}
if(mysql_num_rows($result)==0)
{
echo "No more results to display.";
}
?></div>
<div id="v3"><?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('gencogeeks');
$query="select * from videos where descr='cloud computing' ORDER BY id DESC LIMIT 20,30";
$result=mysql_query($query) or die(mysql_error());
while($row=mysql_fetch_assoc($result))
{
echo $row['videos']."<br>";
}
if(mysql_num_rows($result)==0)
{
echo "No more results to display.";
}
?></div>
<div id="v4"><?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db('gencogeeks');
$query="select * from videos where descr='cloud computing' ORDER BY id DESC LIMIT 30,40";
$result=mysql_query($query) or die(mysql_error());
while($row=mysql_fetch_assoc($result))
{
echo $row['videos']."<br>";
}
if(mysql_num_rows($result)==0)
{
echo "No more results to display.";
}
?></div>
</div>
<div id="footer">
<input type="submit" value="1" name="button" id="bu1">
<input type="submit" value="2" name="button" id="bu2">
<input type="submit" value="3" name="button" id="bu3">
<input type="submit" value="4" name="button" id="bu4">
</div>
</div>
<div id="test">

</div>
<div id="svideos">
</div>
</body>
</html>