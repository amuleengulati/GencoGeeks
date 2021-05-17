<?php
include 'connect.php';
include 'uheader.php';
 ?>
 <div id="d">
 <?php
        $sql = "INSERT INTO 
                    posts(post_content,
                          post_date,
                          post_topic,
                          post_by) 
                VALUES ('" . $_POST['reply-content'] . "',
                        NOW(),
                        " . $_GET['id'] . ",
                        " . $_SESSION['user_id'] . ")";
                         
        $result = mysql_query($sql);
                         
        if(!$result)
        { echo "a=". $_GET['id'];
		echo "b=".$_SESSION['user_id'];
		
            echo '<br>Your reply has not been saved, please try again later.';
        }
        else
        {
            echo 'Your reply has been saved, check out <a href="utopic.php?id=' . htmlentities($_GET['id']) . '">the topic</a>.';
        }


?>
</div>