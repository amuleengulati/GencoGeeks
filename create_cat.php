<?php
//create_cat.php
include 'connect.php';
include 'header.php';
?>
<div id="d">
<a href="dforum.php" style="padding-left:250px">HOME</a>
<a href="create_cat.php" style="padding-left:50px">CREATE CATEGORY</a>
<a href="create_topic.php" style="padding-left:50px">CREATE TOPIC</a><br><br>
<?php 
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    //the form hasn't been posted yet, display it
	echo '<center><br><br>';
    echo "<form method='post' action=''>
        Category name: <input type='text' name='cat_name' /><br><br>
        Category description: <textarea name='cat_description' /></textarea><br><br>
        <input type='submit' id='submit' value='Add category' />
     </form>";
	 echo '</center>';
}
else
{
    //the form has been posted, so save it
    $sql = "INSERT INTO categories(cat_name, cat_description) VALUES ('".$_POST['cat_name']."','".$_POST['cat_description']."')";
    $result = mysql_query($sql);
    if(!$result)
    {
        //something went wrong, display the error
        echo '<center>Error' . mysql_error().'</center>';
    }
    else
    {	echo '<script>';
        echo 'alert("New category successfully added")';
		echo '</script>';
		echo '<center><br><br>';
    echo "<form method='post' action=''>
        Category name: <input type='text' name='cat_name' /><br><br>
        Category description: <textarea name='cat_description' /></textarea><br><br>
        <input type='submit' id='submit' value='Add category' />
     </form>";
	 echo '</center>';
    }
}
?>
</div>