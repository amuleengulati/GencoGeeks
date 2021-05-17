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
<center><h1 id="heading">WEB DEVELOPMENT</h1></center></div>
<div id="d1"><a href="showvideos.php">Videos</a></div>
<div id="d2"><a href="quiz4.php">Tests</a></div>
<div id="d3"><a href="svideos.php">Saved Videos</a></div>
<div id="d4">
<p style="padding:10px">
<img src="webdevelopment.jpg" alt="cloud computing" height="300" width="300" align="right">
Web development is a broad term for the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network). Web development can range from developing the simplest static single page of plain text to the most complex web-based internet applications, electronic businesses, and social network services. A more comprehensive list of tasks to which web development commonly refers, may include web design, web content development, client liaison, client-side/server-side scripting, web server and network security configuration, and e-commerce development. Among web professionals, "web development" usually refers to the main non-design aspects of building web sites: writing markup and coding. Most recently Web development has come to mean the creation of content management systems or CMS. These CMS can be made from scratch, proprietary (such as OpenText), or open source (such as Drupal). In broad terms the CMS acts as middleware between the database and the user through the browser. A principle benefit of a CMS is that it allows non-technical people to make changes to their Web site without having technical knowledge.[1]

For larger organizations and businesses, web development teams can consist of hundreds of people (web developers) and follow standard methods like Agile methodologies while developing websites. Smaller organizations may only require a single permanent or contracting developer, or secondary assignment to related job positions such as a graphic designer and/or information systems technician. Web development may be a collaborative effort between departments rather than the domain of a designated department.
Since the commercialization of the web, web development has been a growing industry. The growth of this industry is being pushed especially by businesses wishing to sell products and services to online customers.[2]

For tools and platforms, the public can use many open source systems to aid in web development. A popular example, the LAMP (Linux, Apache, MySQL, PHP) stack is available for download online free of charge. This has kept the cost of learning web development to a minimum. Another contributing factor to the growth of the industry has been the rise of easy-to-use WYSIWYG web-development software, most prominently Adobe Dreamweaver, WebDev. Using such software, virtually anyone can relatively quickly learn to develop a very basic web page. Knowledge of HyperText Markup Language (HTML) or of programming languages is still required to use such software, but the basics can be learned and implemented quickly with the help of help files, technical books, internet tutorials, or face-to-face training.

An ever growing set of tools and technologies have helped developers build more dynamic and interactive websites. Further, web developers now help to deliver applications as web services which were traditionally only available as applications on a desk-based computer. This has allowed for many opportunities to decentralize information and media distribution. Examples can be seen with the rise of cloud services such as Dropbox, Adobe Creative Cloud and Microsoft's Office 365. These web services allow users to interact with applications from many locations, instead of being tied to a specific workstation for their application environment.

Examples of dramatic transformation in communication and commerce led by web development include e-commerce. Online auction-sites such as eBay have changed the way consumers find and purchase goods and services. Online retailers such as Amazon.com and Buy.com (among many others) have transformed the shopping and bargain-hunting experience for many consumers. Another good example of transformative communication led by web development is the blog. Web applications such as WordPress and Movable Type have created easily implemented blog-environments for individual web sites. The popularity of open-source content management systems such as Joomla!, Drupal, XOOPS, and TYPO3 and enterprise content management systems such as Alfresco and eXo Platform have extended web development's impact at online interaction and communication.

Web development has also impacted personal networking and marketing. Websites are no longer simply tools for work or for commerce, but serve more broadly for communication and social networking. Websites such as Facebook and Twitter provide users with a platform to communicate and organizations with a more personal and interactive way to engage the public.
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