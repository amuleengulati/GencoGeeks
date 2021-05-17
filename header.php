<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="bootstrap.min.css">
  	<script src="bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="jquery.js"></script>
	<script>
	var email= "<?php echo $_SESSION['email']; ?>";
$(document).ready(function()
{
$('#ad72').click(function()
{
$.ajax({
type:'post',
url:'destroy.php'
})
window.location='login.php';
});
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
					echo "<br><br>".$_SESSION['username']."<br>";
					echo $_SESSION['email'];
					?>
			    </div>
			
	 		</div>
<div class="option">		
	
 		<div id="ad1">
 		<a href="admin.php">Home</a>
 		</div>
 		<div id="ad2">
 		<a href="addsub.php">Subjects</a>
 		</div>
 		<div id="ad3">
 		<a href="form.php">Tests</a>
 		</div>
 		<div id="ad4">
 		<a href="videos.php">Upload Videos</a>
 		</div>
	  	<div id="ad5">
		<a href="dforum.php">Discussion Forum</a>
		</div>
		<div id="ad6">
 		<a href="notif.php"><img src="notif.png" c alt="notif" height="30" width="30" style="vertical-align:-40%"></a>
 		</div>
 		<div class="ad7">
 		Profile
  		<div id="ad71">
  		Edit Profile
  		</div>
  		<div id="ad72">
  		Logout
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
<div id="t">
</div>
<div class="des">
</div>
</body>
</html>