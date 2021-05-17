<?php
session_start();
include('connect.php');
$st=$_SESSION['st'];
$sub=preg_replace('/\s+/', '', $_SESSION['sub']);
$query="select * from ".$sub." order by rand() ";
$rs=mysql_query($query) or die(mysql_error());
if(!isset($_SESSION['qn']))
{
	$_SESSION['qn']=0;
	mysql_query("delete from user_answers where user_id='" . $_SESSION['user_id']."'") or die(mysql_error());
	$_SESSION['trueans']=0;
}
else
{	
		if($st=='Next Question' && isset($ans))
		{
		echo "success";
				mysql_data_seek($rs,$_SESSION['qn']);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into user_answers(user_id,que_id, question, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".$_SESSION['user_id']."','$row[0]','$row[1]','$row[3]','$row[4]', '$row[5]','$row[6]','$row[1]','$ans')") or die(mysql_error());
				if($ans==$row[1])
				{
							$_SESSION['trueans']=$_SESSION['trueans']+1;
				}
				$_SESSION['qn']=$_SESSION['qn']+1;
		}
		
		else if($st=='Get Result' && isset($ans))
		{
		echo "failure";
				mysql_data_seek($rs,$_SESSION['qn']);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into user_answers(user_id,que_id, question, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".$_SESSION['user_id']."','$row[0]','$row[1]','$row[3]','$row[4]', '$row[5]','$row[6]','$row[1]','$ans')") or die(mysql_error());
				if($ans==$row[1])
				{
							$_SESSION['trueans']=$_SESSION['trueans']+1;
				}
				$_SESSION['qn']=$_SESSION['qn']+1;
				echo "<h1 class=head1> Result</h1>";
				echo "<Table align=center><tr class=tot><td>Total Question<td>". $_SESSION['qn'];
				echo "<tr class=tans><td>True Answer<td>".$_SESSION['trueans'];
				$w=$_SESSION['qn']-$_SESSION['trueans'];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				unset($_SESSION['qn']);
				
				unset($_SESSION['trueans']);
				exit;
		}
}
?>