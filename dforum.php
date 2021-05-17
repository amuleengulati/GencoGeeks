<html>
<body>
<?php
include 'header.php';
include 'connect.php';
?>
<div id="d">
<a href="dforum.php" style="padding-left:250px">HOME</a>
<a href="create_cat.php" style="padding-left:50px">CREATE CATEGORY</a>
<a href="create_topic.php" style="padding-left:50px">CREATE TOPIC</a><br><br>
<?php
$query="select cat_id, cat_name, cat_description from categories";
$result=mysql_query($query);
if(!$result)
{
echo "The categories could not be displayed. Please try again later.";
}
else
{
if(mysql_num_rows($result)==0)
{
echo "No categories defined yet.";
}
else
{
echo '<table border="1">
<tr>
<th>Category</th>
<th>Description</th>
</tr>';
while($row=mysql_fetch_assoc($result))
{
$id=$row['cat_id'];
echo '<tr>';
echo '<td class="leftpart">';
echo "<h3><a href='category.php?id=".$id."'>".$row['cat_name'].'</a></h3>';
echo '</td>';
echo '<td class="rightpart">';
echo "<h4>".$row['cat_description'].'</h4>';
echo '</td>';
echo '</tr>';
}
}
}
?>
</div>
</body>
</html>