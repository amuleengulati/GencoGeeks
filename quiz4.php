<!doctype html>
<html>
<head>
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
$('.c').fadeIn();
$('.popup').fadeIn();

$('#starttest').click(function(){
window.location='quiz2.php';
});
});
</script>
<style>
.popup
{
position:fixed;
top:200px;
left:400px;
height:250px;
width:550px;
border:1px solid green;
z-index:2;
background-color:white;
color:black;
}
.c
{
position:fixed;
top:0px;
left:0px;
height:100%;
width:100%;
background: -prefix-linear-gradient(bottom left, rgba(0,255,255,0.7) 50%,rgba(0,0,0,1) 50%), url(main_background.jpg);
background: linear-gradient(top right, rgba(255,0,0,0.7),rgba(0,0,0,1)), url(main_background.jpg);
background: linear-gradient(top right, rgba(0,255,255,0),rgba(0,0,0,1)), url(main_background.jpg);
background: linear-gradient(to top right, rgba(0,255,255,0.7),rgba(0,0,0,1)), url(main_background.jpg);
z-index:1;
}
#instruction
{
padding:20px;
}

</style>
</head>
<body>
<div class="c">
</div>
<div class="popup"><pre>
<p id="instruction">
<b>Instructions:</b><br>
1.Total number of questions <b>30</b>.
2.Time allowed <b>1 Hour</b>
3.Each question carries one mark and there will be <b>no</b> negative marking.
4.Donot Refresh the page.
5.Your test will be submitted once you click on the <b>Submit</b> button
or the allowed time is expired.<br><br>
<input type="button" value="START TEST" id="starttest" style="margin-left:200px">
</p></pre>
</div>
</body>
</html>