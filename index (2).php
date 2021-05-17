<!doctype html>
<html>
<head>
<script src="jquery.js"></script>
<script src="script.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.panel
{
display:none;
}
</style>
</head>
<body>
<div class="header">
<li id="li"><img src="logo.png" height="50" width="50" style="vertical-align:-80%"></li>
<a href="#" id="logo"><b>G</b>enco<b>G</b>eeks</a>
<a href="#" id="subjects">Subjects</a>
<li style="padding-right:650px"><img src="arrow.png" height="15" width="15" style="vertical-align:-20%"></li>
<a href="#" id="subjects">Login</a>
<li><img src="logo.png" height="25" width="25" style="vertical-align:-40%"></li>
<a href="#" id="subjects">Signup</a>
</div>
<div id="container">
</div>
<div class="content">
<p style="font-size:500%">SUCCESS IS JUST A CLICK AWAY</p>
<center><p style="font-size:200%">Subscribe.Learn.Achieve.</p></center>
</div>
<div class="panel">
<div id="logo1"><img src="logo.png" height="50" width="50" style="vertical-align:-50%">
<a href="index.php"><b>G</b>enco<b>G</b>eeks</a></div>
<div id="subjects1">
<a href="#"><br>Subjects</a>
<img src="arrow.png" height="15" width="15" id="arrow" ></div>
<div id="about"><a href="about.php"><br>About</a></div>
<div id="search"><div id="search1"><img src="search.gif" width="35" height="35" style="vertical-align:-65%"><input type="text" placeholder="Search courses, topics and videos..." size="50" style="padding:5px" class="se"></div></div><div class="result"></div>
<div id="login1"><a href="login.php"><br>Log in</a></div>
<div id="notif"><br>Make Payment</div>
<div id="signup1"><br>Signup</div>
</div>
<div class="subindex">
<div class="home">
<a href="index.php" id="home">Home</a>
</div>
<div id="db">
Databases
</div>
<div id="wd">
Web Development
</div>
<div id="bd">
Big Data
</div>
<div id="cc">
Cloud Computing
</div>
<div id="bi">
Business Intelligence
</div>
<div id="da">
Data Analytics
</div>
</div>
<div class="subdesc">
</div>
<div class="button">
<div class="b1"><center>Start Learning Now</div>
<div id="b2"><center>Sign up</div>
<div id="b3"><center>Learn More</div>
</div>
<div class="c"></div>
<div class="popup1">
<?php
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='amuleengulati13@gmail.com'; // Business email ID
?>
<input type="button" value="X" style="float:right" id="close">
<center><h1>GencoGeeks Payment Section</h1></center>
<br>
<p>To create an account on GencoGeeks, you are required to pay a one-time fee of <b>$50</b> .</p>
<p><b>Pay once, and enjoy vast variety of subjects offered by the website.</b></p>
<p>To pay the fee, make sure that you have an account on PayPal payment site and credit card facility.</p>
<p>Click on the 'Buy Now' button to pay the fee.</p>
<div class="product">            
    <div class="btn">
    <form action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1" target="_blank">
    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="GencoGeeks Payment">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="50">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="http://www.gencogeeks.com/cancel.php">
    <input type="hidden" name="return" value="http://www.gencogeeks.com/success.php">
    <center><input type="image" src="pay.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form> 
    </div>
</div>
<center><p id='p1'> In case, you donot have an account on PayPal, <a href='http://www.paypal.com' target="_blank">click here</a> to create an account.</p>
<p id="p1">By paying the fee, you agree to our <a href="tos.html">Terms of service</a> and <a href="pp.html">Privacy Policy</a></p></center>
</div>
<div class="popup">
<input type="button" value="X" style="float:right" id="close1">
<center><p id="p2">Start learning on GencoGeeks</p>
<form method="post" action="userdetails.php" enctype="multipart/form-data">
<table><tr><td>
First Name:</td><td><input type="text" name="fname" placeholder="First Name" required style="padding:5px"></td></tr>
<tr><td>Last Name:</td><td><input type="text" name="lname" placeholder="Last Name" required style="padding:5px"></td></tr>
<tr><td>Email:</td><td><input type="email" name="email" placeholder="Email" required style="padding:5px"></td></tr>
<tr><td>Birthdate:</td>
<td><input type="date" name="dob" required style="padding:5px"></td></tr>
<tr><td>Payment Transaction id:</td>
<td><input type="text" name="t_id" required style="padding:5px" placeholder="transaction id"></td></tr>
<tr><td>Select your Username:</td>
<td><input type="text" name="username" placeholder="Username" required style="padding:5px"></td></tr>
<tr><td>Select your password:</td>
<td><input type="password" name="pwd" placeholder="Password" required style="padding:5px"></td></tr>
<tr><td>Upload your pic:</td><td><input type="file" name="dp" required></td></tr></table><br><br>
<input type="submit" value="Sign Up" id="submit"><br><br>
<p id="p1">By clicking "Sign Up",you agree to our Terms of Service and Privacy Policy.</p></center>
</form>
</div>
</body>
</html>