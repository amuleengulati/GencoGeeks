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
//first select the category based on $_GET['cat_id']
$sql = "SELECT
            cat_id,
            cat_name,
            cat_description
        FROM
            categories
        WHERE
            cat_id = " .$_GET['id'];
			
$result = mysql_query($sql) or die('error:'.mysql_error());
 
if(!$result)
{
    echo 'The category could not be displayed, please try again later.' . mysql_error();
}
else
{
    if(mysql_num_rows($result) == 0)
    {
        echo 'This category does not exist.';
    }
    else
    {
        //display category data
        while($row = mysql_fetch_assoc($result))
        {
            echo "<h2>Topics in '" . $row['cat_name'] . "' category</h2>";
        }
     
        //do a query for the topics
        $sql = 'SELECT  
                    topic_id,
                    topic_subject,
                    topic_date,
                    topic_cat
                FROM
                    topics
                WHERE
                    topic_cat = '.$_GET['id'];
         
        $result = mysql_query($sql) or die('error'.mysql_error());
         
        if(!$result)
        {
            echo 'The topics could not be displayed, please try again later.';
        }
        else
        {
            if(mysql_num_rows($result) == 0)
            {
                echo 'There are no topics in this category yet.';
            }
            else
            {
                //prepare the table
                echo '<table border="1">
                      <tr>
                        <th>Topic</th>
                        <th>Created at</th>
                      </tr>'; 
                     
                while($row = mysql_fetch_assoc($result))
                {               
                    echo '<tr>';
                        echo '<td class="leftpart1">';
                            echo '<h3><a href="topic.php?id=' . $row['topic_id'] . '">' . $row['topic_subject'] . '</a><h3>';
                        echo '</td>';
                        echo '<td class="rightpart1">';
                            echo date('d-m-Y', strtotime($row['topic_date']));
                        echo '</td>';
                    echo '</tr>';
                }
            }
        }
    }
}
?>
</div>