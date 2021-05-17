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
<center><h1 id="heading">BIG DATA</h1></center></div>
<div id="d1"><a href="showvideos.php">Videos</a></div>
<div id="d2"><a href="quiz4.php">Tests</a></div>
<div id="d3"><a href="svideos.php">Saved Videos</a></div>
<div id="d4">
<p style="padding:10px">
<img src="bigdata.png" alt="cloud computing" height="300" width="300" align="right">
Big data is a broad term for data sets so large or complex that traditional data processing applications are inadequate. Challenges include analysis, capture, data curation, search, sharing, storage, transfer, visualization, querying and information privacy. The term often refers simply to the use of predictive analytics or other certain advanced methods to extract value from data, and seldom to a particular size of data set. Accuracy in big data may lead to more confident decision making. And better decisions can mean greater operational efficiency, cost reduction and reduced risk.

Analysis of data sets can find new correlations, to "spot business trends, prevent diseases, combat crime and so on."[2] Scientists, business executives, practitioners of media, and advertising and governments alike regularly meet difficulties with large data sets in areas including Internet search, finance and business informatics. Scientists encounter limitations in e-Science work, including meteorology, genomics,[3] connectomics, complex physics simulations,[4] and biological and environmental research.[5]

Data sets grow in size in part because they are increasingly being gathered by cheap and numerous information-sensing mobile devices, aerial (remote sensing), software logs, cameras, microphones, radio-frequency identification (RFID) readers, and wireless sensor networks.[6][7][8] The world's technological per-capita capacity to store information has roughly doubled every 40 months since the 1980s;[9] as of 2012, every day 2.5 exabytes (2.5×1018) of data were created;[10] The challenge for large enterprises is determining who should own big data initiatives that straddle the entire organization.[11]

Work with big data is necessarily uncommon; most analysis is of "PC size" data, on a desktop PC or notebook[12] that can handle the available data set.

Relational database management systems and desktop statistics and visualization packages often have difficulty handling big data. The work instead requires "massively parallel software running on tens, hundreds, or even thousands of servers".[13] What is considered "big data" varies depending on the capabilities of the users and their tools, and expanding capabilities make big data a moving target. Thus, what is considered "big" one year becomes ordinary later. "For some organizations, facing hundreds of gigabytes of data for the first time may trigger a need to reconsider data management options. For others, it may take tens or hundreds of terabytes before data size becomes a significant consideration."[14]
</p>
</div>
</div>
<div id="videos">
<div id="frame">
<center><h1 id="heading">BIG DATA</h1></center></div>
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