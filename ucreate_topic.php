<?php
//create_cat.php
include 'connect.php';
include 'uheader.php';
 ?>
 <div id="d">
 <a href="udforum.php" style="padding-left:350px">HOME</a>
<a href="ucreate_topic.php" style="padding-left:50px">CREATE TOPIC</a><br><br>
<?php 
echo '<center><h2>Create a topic</h2></center>';
    if($_SERVER['REQUEST_METHOD'] != 'POST')
    {   
      
        $sql = "SELECT
                    cat_id,
                    cat_name,
                    cat_description
                FROM
                    categories";
         
        $result = mysql_query($sql);
         
        if(!$result)
        {
            //the query failed
            echo 'Error while selecting from database. Please try again later.';
        }
        else
        {
            if(mysql_num_rows($result) == 0)
            {
                //there are no categories, so a topic can't be posted
              echo 'Before you can post a topic, you must wait for an admin to create some categories.';
                
            }
            else
            {
				echo '<center>';
                echo '<form method="post" action="">
                    Subject: <input type="text" name="topic_subject" required /><br><br>
					Category:'; 
                 
                echo '<select name="topic_cat" required>';
                    while($row = mysql_fetch_assoc($result))
                    {
                        echo '<option value="' . $row['cat_id'] . '">' . $row['cat_name'] . '</option>';
                    }
                echo '</select><br><br>'; 
                     
                echo 'Description: <textarea name="post_content"  required/></textarea><br><br>
                    <input type="submit" id="submit" value="Create topic" />
                 </form>';
				 echo '</center>';
            }
        }
    }
    else
    {
        //start the transaction
        $query  = "BEGIN WORK;";
        $result = mysql_query($query);
         
        if(!$result)
        {
            //Damn! the query failed, quit
            echo 'An error occured while creating your topic. Please try again later.';
        }
        else
        {
     
            //the form has been posted, so save it
            //insert the topic into the topics table first, then we'll save the post into the posts table
            $sql = "INSERT INTO 
                        topics(topic_subject,
                               topic_date,
                               topic_cat,
                               topic_by)
                   VALUES('" . $_POST['topic_subject'] . "',
                               NOW(),
                               " . $_POST['topic_cat'] . ",
                               " . $_SESSION['user_id'] . "
                               )";
                      
            $result = mysql_query($sql);
            if(!$result)
            {
                //something went wrong, display the error
                echo 'An error occured while inserting your data. Please try again later.' . mysql_error();
                $sql = "ROLLBACK;";
                $result = mysql_query($sql);
            }
            else
            {
                //the first query worked, now start the second, posts query
                //retrieve the id of the freshly created topic for usage in the posts query
                $topicid = mysql_insert_id();
                 
                $sql = "INSERT INTO
                            posts(post_content,
                                  post_date,
                                  post_topic,
                                  post_by)
                        VALUES
                            ('" . $_POST['post_content'] . "',
                                  NOW(),
                                  " . $topicid . ",
                                  " . $_SESSION['user_id'] . "
                            )";
                $result = mysql_query($sql);
                 
                if(!$result)
                {
                    //something went wrong, display the error
                    echo 'An error occured while inserting your post. Please try again later.' . mysql_error();
                    $sql = "ROLLBACK;";
                    $result = mysql_query($sql);
                }
                else
                {
                    $sql = "COMMIT;";
                    $result = mysql_query($sql);
                     
                    //after a lot of work, the query succeeded!
                    echo 'You have successfully created <a href="utopic.php?id='. $topicid . '" >your new topic</a>.';
                }
            }
        }
    }

?>
</div>