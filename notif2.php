<?php
include('uheader.php');
?>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery.js"></script>
<script src="script.js"></script>
<script>
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
</head>
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