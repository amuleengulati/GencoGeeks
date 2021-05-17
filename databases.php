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
<center><h1 id="heading">DATABASES</h1></center></div>
<div id="d1"><a href="showvideos.php">Videos</a></div>
<div id="d2"><a href="quiz4.php">Tests</a></div>
<div id="d3"><a href="svideos.php">Saved Videos</a></div>
<div id="d4">
<p style="padding:10px">
<img src="databases.jpg" alt="cloud computing" height="300" width="300" align="left">
A database is an organized collection of data.[1] It is the collection of schemas, tables, queries, reports, views and other objects. The data is typically organized to model aspects of reality in a way that supports processes requiring information, such as modelling the availability of rooms in hotels in a way that supports finding a hotel with vacancies.

A database management system (DBMS) is a computer software application that interacts with the user, other applications, and the database itself to capture and analyze data. A general-purpose DBMS is designed to allow the definition, creation, querying, update, and administration of databases. Well-known DBMSs include MySQL, PostgreSQL, Microsoft SQL Server, Oracle, Sybase and IBM DB2. A database is not generally portable across different DBMSs, but different DBMS can interoperate by using standards such as SQL and ODBC or JDBC to allow a single application to work with more than one DBMS. Database management systems are often classified according to the database model that they support; the most popular database systems since the 1980s have all supported the relational model as represented by the SQL language.[disputed – discuss] Sometimes a DBMS is loosely referred to as a 'database'.
Formally, a "database" refers to a set of related data and the way it is organized. Access to this data is usually provided by a "database management system" (DBMS) consisting of an integrated set of computer software that allows users to interact with one or more databases and provides access to all of the data contained in the database (although restrictions may exist that limit access to particular data). The DBMS provides various functions that allow entry, storage and retrieval of large quantities of information and provides ways to manage how that information is organized.

Because of the close relationship between them, the term "database" is often used casually to refer to both a database and the DBMS used to manipulate it.

Outside the world of professional information technology, the term database is often used to refer to any collection of related data (such as a spreadsheet or a card index). This article is concerned only with databases where the size and usage requirements necessitate use of a database management system.[2]

Existing DBMSs provide various functions that allow management of a database and its data which can be classified into four main functional groups:

Data definition – Creation, modification and removal of definitions that define the organization of the data.
Update – Insertion, modification, and deletion of the actual data.[3]
Retrieval – Providing information in a form directly usable or for further processing by other applications. The retrieved data may be made available in a form basically the same as it is stored in the database or in a new form obtained by altering or combining existing data from the database.[4]
Administration – Registering and monitoring users, enforcing data security, monitoring performance, maintaining data integrity, dealing with concurrency control, and recovering information that has been corrupted by some event such as an unexpected system failure.[5]
Both a database and its DBMS conform to the principles of a particular database model.[6] "Database system" refers collectively to the database model, database management system, and database.[7]

Physically, database servers are dedicated computers that hold the actual databases and run only the DBMS and related software. Database servers are usually multiprocessor computers, with generous memory and RAID disk arrays used for stable storage. RAID is used for recovery of data if any of the disks fail. Hardware database accelerators, connected to one or more servers via a high-speed channel, are also used in large volume transaction processing environments. DBMSs are found at the heart of most database applications. DBMSs may be built around a custom multitasking kernel with built-in networking support, but modern DBMSs typically rely on a standard operating system to provide these functions.[citation needed] Since DBMSs comprise a significant economical market, computer and storage vendors often take into account DBMS requirements in their own development plans.[citation needed]

Databases and DBMSs can be categorized according to the database model(s) that they support (such as relational or XML), the type(s) of computer they run on (from a server cluster to a mobile phone), the query language(s) used to access the database (such as SQL or XQuery), and their internal engineering, which affects performance, scalability, resilience, and security.
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