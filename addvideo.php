  <?php
include 'connect.php';
include 'header.php';
?>
<div id="d">
<?php
$level=$_POST['level'];
$des=$_POST['des'];
		$sub=$_POST['sub'];
        $name = $_FILES['vid']['name'];
        $type = explode('.',$name);
        $type = end($type);
        $size= $_FILES['vid']['size'];
        $random_name = rand();
        $tmp= $_FILES['vid']['tmp_name'];
		if($type !='mp4' && $type !='MP4' && $type !='flv' && $type !='3gp')
       {
       $message ="Video Format Not Supported";
	   echo "<script>alert('Invalid video format.<br>');window.location.href='videos.php';";
echo "</script>";
        }
       else
        {
        move_uploaded_file($tmp, 'videos/'.$random_name.'.'.$type);

       $query="INSERT INTO videos(name,url,subject,description,level) VALUES ('$name',   
        'videos/$random_name.$type','$sub','$des','$level')"; 
		$result=mysql_query($query) or die(mysql_error());
if(!$result)
{
echo "<script>alert('There was a problem uploading video.<br>Try again later.');window.location.href='videos.php';";
echo "</script>";
}
else
{        echo "<script>alert('Video uploaded successfully.');window.location.href='videos.php';";
echo "</script>";
        }
		}
		
		
       ?>
	   </div>