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
    topic_id,
    topic_subject
FROM
    topics
WHERE
    topics.topic_id = " . $_GET['id'];

			
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
        
        while($row = mysql_fetch_assoc($result))
        {
            echo '<table border="1">
                      <tr>
                       <center> <th colspan="2">'.$row['topic_subject'].'<a href="replyf.php?id='.$row['topic_id'].'"  style="float:right;color:white" id="r">Reply</h></th></center>
                        </tr>'; 
        }
     
        //do a query for the topics
        $sql = "SELECT
    posts.post_topic,
    posts.post_content,
    posts.post_date,
    posts.post_by,
    user_details.id,
    user_details.username
FROM
    posts
LEFT JOIN
    user_details
ON
    posts.post_by = user_details.id
WHERE
    posts.post_topic = " . $_GET['id'];

         
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
                
                     
                while($row = mysql_fetch_assoc($result))
                {        $_SESSION['id']=$row['post_topic'];  
							$id=$_SESSION['id'];				
                    echo '<tr>';
                        echo '<td class="leftpar2">';
                            echo '<h4>' . $row['username'] . '</a><h4>'.$row['post_date'];
                        echo '</td>';
                        echo '<td class="rightpart2">';
                            echo '<h4>'.$row['post_content'].'</h4>';
                        echo '</td>';
                    echo '</tr>';
                }
            }
        }
    }
}
?>
</div>
<div class="reply">
Username
</div>