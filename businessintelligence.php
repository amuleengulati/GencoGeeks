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
<center><h1 id="heading">BUSINESS INTELLIGENCE</h1></center></div>
<div id="d1"><a href="showvideos.php">Videos</a></div>
<div id="d2"><a href="quiz4.php">Tests</a></div>
<div id="d3"><a href="svideos.php">Saved Videos</a></div>
<div id="d4">
<p style="padding:10px">
<img src="businessintelligence.jpg" alt="cloud computing" height="300" width="300" align="right">
Business intelligence (BI) is often described as "the set of techniques and tools for the transformation of raw data into meaningful and useful information for business analysis purposes"[citation needed]. The term "data surfacing" is also more often associated with BI functionality. BI technologies are capable of handling large amounts of unstructured data to help identify, develop and otherwise create new strategic business opportunities. The goal of BI is to allow for the easy interpretation of these large volumes of data. Identifying new opportunities and implementing an effective strategy based on insights can provide businesses with a competitive market advantage and long-term stability.[1]

BI technologies provide historical, current and predictive views of business operations. Common functions of business intelligence technologies are reporting, online analytical processing, analytics, data mining, process mining, complex event processing, business performance management, benchmarking, text mining, predictive analytics and prescriptive analytics.

BI can be used to support a wide range of business decisions ranging from operational to strategic. Basic operating decisions include product positioning or pricing. Strategic business decisions include priorities, goals and directions at the broadest level. In all cases, BI is most effective when it combines data derived from the market in which a company operates (external data) with data from company sources internal to the business such as financial and operations data (internal data). When combined, external and internal data can provide a more complete picture which, in effect, creates an "intelligence" that cannot be derived by any singular set of data.
Business intelligence is made up of an increasing number of components including:

~Multidimensional aggregation and allocation
~Denormalization, tagging and standardization
~Realtime reporting with analytical alert
~A method of interfacing with unstructured data sources
~Group consolidation, budgeting and rolling forecasts
~Statistical inference and probabilistic simulation
~Key performance indicators optimization
~Version control and process management
~Open item management
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