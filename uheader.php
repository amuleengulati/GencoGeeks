<?php
session_start();
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery.js"></script>
<script>
var email= "<?php echo $_SESSION['email']; ?>";

$(document).ready(function()
{
$('#h6').click(function()
{
$('#n1').slideToggle();
$.ajax({
type:'post',
url:'update.php'
})
});
$('#n1').mouseleave(function()
{
$('#n1').slideUp();
});
$('#n1').css('cursor','pointer');
});
</script>

<script src="script.js"></script>
</head>
<body>
<div class="profile">
<div id="dp">

<img src="<?php echo $_SESSION['dp']?>" height="150" width="120">

</div>
<div id="username">
<?php
echo $_SESSION['username'];
?>
</div>
<div id="email">
<?php
echo $_SESSION['email'];
?>
</div>
</div>
<div class="option">
 <div id="h1">
 <a href="userlogin.php">Home</a>
 </div>
 <div id="h2">
 Subjects
 </div>
 <div class="des"></div>
 <div id="h6">
 <img src="notif.png" alt="notif" height="30" width="30" style="vertical-align:-40%">
 </div>
 <div id="h4">
 <a href="uvideos.php">Saved Videos</a>
 </div>
 <div id="h5">
 <a href="udforum.php">Discussion Forum</a>
 </div>
 <div id="h7">
 Profile
 <div class="h70">
  <div id="h71">
  Edit Profile<hr>
  </div>
  <div id="h72">
  Logout
  </div>
 </div>
 </div>
 </div>

<div class="c">
</div>
<div class="popup">
<input type="button" value="X" style="float:right" id="close"><br><br><br><br><br><br><br><br>
<form method="post" action="editprofile.php" enctype="multipart/form-data">
<center><table>
<tr><td>Username:</td><td><input type="text" value="<?php echo $_SESSION['username']?>" name="username" required></td></tr>
<tr><td>Password:</td><td><input type="text" value="<?php echo $_SESSION['pwd']?>" name="pwd" required></td></tr>
<tr><td>Profile Picture </td><td><input type="file" value="<?php echo $_SESSION['dp']?>" name="dp"></td></tr>
</table><br><br></center><br>
<center><input type="submit" value="SAVE CHANGES" id="submit"></center>
</form>
</div>


<div id="n" style="position:absolute;top:245px;left:940px;height:15px;width:15px;color:red;font-weight:bold;border:1px solid red;border-radius:15px;">
<?php
include('connect.php');
$query="select * from notif where email='".$_SESSION['email']."' AND status='unread' ";
$result=mysql_query($query) or die(mysql_error());
$c=mysql_num_rows($result);
echo '<center>'.$c.'</center>';
?>
</div>
<div id="n1" style="position:absolute;top:280px;left:850px;height:auto;width:200px;border:1px solid #d3d3d3;display:none;">
<?php
$query="select * from notif where email='".$_SESSION['email']."' ORDER BY(id) DESC ";
$result=mysql_query($query) or die(mysql_error());
while($row=mysql_fetch_assoc($result))
{
echo '<center>'.$row['message']."<hr></center>";
}
?>
</div>

</body>
</html>